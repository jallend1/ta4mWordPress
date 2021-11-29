import './index.scss';
import {
  TextControl,
  Flex,
  FlexBlock,
  FlexItem,
  Button,
  Icon
} from '@wordpress/components';

const ourStartFunction = () => {
  let locked = false;
  wp.data.subscribe(() => {
    const results = wp.data
      .select('core/block-editor')
      .getBlocks()
      .filter(
        (block) =>
          block.name === 'ourplugin/are-you-paying-attention' &&
          block.attributes.correctAnswer === undefined
      );
    if (results.length && locked === false) {
      locked = true;
      wp.data.dispatch('core/editor').lockPostSaving('noanswer');
    }
    if (!results.length && locked) {
      locked = false;
      wp.data.dispatch('core/editor').unlockPostSaving('noanswer');
    }
  });
};

ourStartFunction();

wp.blocks.registerBlockType('ourplugin/are-you-paying-attention', {
  title: 'Are You Paying Attention?',
  icon: 'smiley',
  category: 'common',
  attributes: {
    question: { type: 'string' },
    answers: { type: 'array', default: [''] },
    correctAnswer: { type: 'number', default: undefined }
  },
  edit: EditComponent,
  save: function (props) {
    return null;
  }
});

function EditComponent(props) {
  const updateQuestion = (value) => {
    props.setAttributes({ question: value });
  };

  const handleDeleteAnswer = (indexToDelete) => {
    const newAnswers = props.attributes.answers.filter(
      (answer, index) => index != indexToDelete
    );
    props.setAttributes({ answers: newAnswers });
    if (indexToDelete === props.attributes.correctAnswer) {
      props.setAttributes({ correctAnswer: undefined });
    }
  };

  const markAsCorrect = (indexToMarkCorrect) => {
    props.setAttributes({ correctAnswer: indexToMarkCorrect });
  };

  return (
    <div className='paying-attention-edit-block'>
      <TextControl
        label='Question: '
        value={props.attributes.question}
        onChange={updateQuestion}
        style={{ fontSize: '20px' }}
      />
      <p style={{ fontSize: '13px', margin: '20px 0 8px 0' }}>Answers:</p>
      {props.attributes.answers.map((answer, index) => (
        <Flex>
          <FlexBlock>
            <TextControl
              value={answer}
              onChange={(newValue) => {
                const newAnswers = props.attributes.answers.slice();
                newAnswers[index] = newValue;
                props.setAttributes({ answers: newAnswers });
              }}
              autoFocus={answer === undefined}
            />
          </FlexBlock>
          <FlexItem>
            <Button onClick={() => markAsCorrect(index)}>
              <Icon
                className='mark-as-correct'
                icon={
                  props.attributes.correctAnswer === index
                    ? 'star-filled'
                    : 'star-empty'
                }
              />
            </Button>
          </FlexItem>
          <FlexItem>
            <Button
              className='attention-delete'
              isLink
              onClick={() => handleDeleteAnswer(index)}
            >
              Delete
            </Button>
          </FlexItem>
        </Flex>
      ))}
      <Button
        isPrimary
        onClick={() => {
          props.setAttributes({
            answers: props.attributes.answers.concat([undefined])
          });
        }}
      >
        Add another answer
      </Button>
    </div>
  );
}
