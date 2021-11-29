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
  edit: EditComponent,
  save: function (props) {
    return null;
  }
});

function EditComponent(props) {
  return (
    <div className='paying-attention-edit-block'>
      <TextControl label='Question: ' style={{ fontSize: '20px' }} />
      <p style={{ fontSize: '13px', margin: '20px 0 8px 0' }}>Answers:</p>
      <Flex>
        <FlexBlock>
          <TextControl />
        </FlexBlock>
        <FlexItem>
          <Button>
            <Icon icon='star-empty' className='mark-as-correct' />
          </Button>
        </FlexItem>
        <FlexItem>
          <Button className='attention-delete' isLink>
            Delete
          </Button>
        </FlexItem>
      </Flex>
      <Button isPrimary>Add another answer</Button>
    </div>
  );
}
