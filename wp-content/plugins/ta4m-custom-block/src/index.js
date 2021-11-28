wp.blocks.registerBlockType('ourplugin/ta4m-custom-block', {
  title: 'TA4M Custom Block',
  icon: 'smiley',
  category: 'common',
  attributes: {
    badgeColor: { type: 'string' },
    hostName: { type: 'string' }
  },
  edit: function (props) {
    function updateBadgeColor(e) {
      props.setAttributes({ badgeColor: e.target.value });
    }

    function updateHostName(e) {
      props.setAttributes({ hostName: e.target.value });
    }
    return (
      <div>
        <input
          type='text'
          placeholder='Badge Color'
          value={props.attributes.badgeColor}
          onChange={updateBadgeColor}
        />
        <input
          type='text'
          placeholder='Host Name'
          value={props.attributes.hostName}
          onChange={updateHostName}
        />
      </div>
    );
  },
  save: function (props) {
    return null;
  }
});
