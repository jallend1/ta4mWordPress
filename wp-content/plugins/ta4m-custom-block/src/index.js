import './index.scss';

wp.blocks.registerBlockType('ourplugin/ta4m-custom-block', {
  title: 'TA4M Custom Block',
  icon: 'smiley',
  category: 'common',
  editor_style: 'ta4m-editor-styles',
  attributes: {
    badgeColor: { type: 'string' },
    hostName: { type: 'string' },
    bio: { type: 'string' }
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
      <div className='ta4m-bio-details-inputs'>
        <input
          type='text'
          placeholder='Host Name'
          value={props.attributes.hostName}
          onChange={updateHostName}
          className='host-name'
        />
        <div className='uniform-input'>
          <label for='uniform-color'>Uniform:</label>
          <select
            name='uniform-color'
            id='uniform-color'
            value={props.attributes.badgeColor}
            onChange={updateBadgeColor}
          >
            <option value='red'>Red</option>
            <option value='yellow'>Yellow</option>
            <option value='blue'>Blue</option>
          </select>
        </div>
        {/* <input
          type='text'
          placeholder='Bio'
          value={props.attributes.bio}
          onChange={updateBio}
        /> */}
        <textarea value={props.attributes.bio} onChange={updateBio}></textarea>
      </div>
    );
  },
  save: function (props) {
    return null;
  }
});
