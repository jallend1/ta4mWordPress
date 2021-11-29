import './index.scss';
import { TextControl } from '@wordpress/components';

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
      <TextControl label='Question: ' />
    </div>
  );
}
