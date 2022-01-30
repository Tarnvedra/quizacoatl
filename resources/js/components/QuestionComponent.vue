<template>
    <div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-title">Questions</div>
                <div class="card-body">
                    <div class="col-sm-8">
                        <div class="card text-black bg-light mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Question</h5>
                                <p class="card-text" id="question">Where is the original Starry Night by Vincent Van Gogh housed? #placeholder#</p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-danger">Reveal Answer</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</template>



<script>
export default {
    name: "QuestionComponent",
    mounted() {
        console.log('Question Component mounted.')
    },
    data() {
                return {
                   question: {
                       id: '',
                       question: '',
                       answer: ''
                             }

                        }
          }

}
</script>

<style scoped>

</style>
