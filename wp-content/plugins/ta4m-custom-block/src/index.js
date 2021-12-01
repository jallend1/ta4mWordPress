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

    const updateBio = (e) => {
      props.setAttributes({ bio: e.target.value });
    };

    function updateHostName(e) {
      props.setAttributes({ hostName: e.target.value });
    }

    return (
      <div>
        <h2>Active Crew</h2>
        <input
          type='text'
          placeholder='Host Name'
          value={props.attributes.hostName}
          onChange={updateHostName}
        />
        <input
          type='text'
          placeholder='Badge Color'
          value={props.attributes.badgeColor}
          onChange={updateBadgeColor}
        />
        <input
          type='text'
          placeholder='Bio'
          value={props.attributes.bio}
          onChange={updateBio}
        />
      </div>
    );
  },
  save: function (props) {
    return null;
  }
});
