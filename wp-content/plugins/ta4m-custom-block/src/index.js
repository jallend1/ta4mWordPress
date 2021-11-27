wp.blocks.registerBlockType("ourplugin/ta4m-custom-block", {
    title: "TA4M Custom Block",
    icon: "smiley",
    category: "common",
    edit: function () {
        return (
            <h3>This an H3 from JSX!</h3>
        )
    },
    save: function () {
        return wp.element.createElement('h1', null, 'Howdy from the save function!')
    }
});