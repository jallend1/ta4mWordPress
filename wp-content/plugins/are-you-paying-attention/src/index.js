import './index.scss';
import {
  TextControl,
  Flex,
  FlexBlock,
  FlexItem,
  Button,
  Icon
} from '@wordpress/components';

wp.blocks.registerBlockType('ourplugin/are-you-paying-attention', {
  title: 'Are You Paying Attention?',
  icon: 'smiley',
  category: 'common',
  attributes: {
    question: { type: 'string' },
    answers: { type: 'array', default: [''] }
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
            <Button>
              <Icon icon='star-empty' className='mark-as-correct' />
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