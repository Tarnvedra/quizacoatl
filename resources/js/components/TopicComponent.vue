<template>
    <div class="row">
        <form id="topic-selector" method="#" action="#">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-title">Topics</div>
                    <div class="card-body">
                        <div class="form-group">
                            <div v-for="topic in topics" v-bind:key="topic.name">
                                <div v-if="topic.name === 'tv'">
                                    <button type="submit" :id="topic.name" :class="topic.class">{{ topic.name.toUpperCase() }}</button>
                                </div>
                                <div v-else>
                                    <button type="submit" :id="topic.name" :class="topic.class">{{ topic.name.capitalize(topic.name) }}
                                    </button>
                                </div>
                            </div>
                            <button type="submit" id="random" class="btn-primary btn-lg">Random</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props: [ 'route'],
    mounted() {
        console.log('Topic Component mounted.')

    },
    data() {
        return {
           topics: [],
            topic: {},
            name: ''
        }
    },
    created() {
        console.log('topics = ' + this.topics)
        console.log('route = ' + this.route)
        this.fetchTopics();
    },

    methods: {
        capitalize(string) {
            return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
        },
        fetchTopics() {
            axios.get(this.route).then((response) => {
                this.topics = response.data.topics
            }).catch(error => console.log(error));
        }
    }
}
</script>

<style scoped>

</style>
