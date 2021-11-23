wp.blocks.registerBlockType("ourplugin/ta4m-custom-block", {
    title: "TA4M Custom Block",
    icon: "smiley",
    category: "common",
    edit: function () {
        return wp.element.createElement('h1', null, 'It works!!')
    },
    save: function () {
        return wp.element.createElement('h1', null, 'Howdy from the save function!')
    }
});