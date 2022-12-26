panel.plugin("starter-kit/button-block", {
  blocks: {
    button: {
      computed: {
        placeholder() {
          return "[Tekst knop hier]";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.anchor"
          @input="update({ anchor: $event.target.value })"
        />
      `
    }
  }
});