import { TextControl } from '@wordpress/components';

wp.blocks.registerBlockType('ourplugin/are-you-paying-attention', {
  title: 'Are You Paying Attention?',
  icon: 'smiley',
  category: 'common',
  edit: EditComponent
});

function EditComponent(props) {
  return (
    <div>
      <TextControl />
    </div>
  );
}
