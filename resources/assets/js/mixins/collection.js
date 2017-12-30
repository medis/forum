export default {
    data() {
        return {
            items: []
        }
    },
    
    methods: {
        add(reply) {
            this.items.push(item);
            this.$emit('added');
        },

        remove(index) {
            this.items.splice(index, 1);

            this.$emit('removed');
        }
    }
}