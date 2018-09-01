<template>
    <button id="go-to-payment" class="box-sm-full-width action__box--black">
        <a href="/payment"></a>
        {{ ticketCount }} TICKETS KAUFEN
    </button>
</template>

<script>
    export default {
        data() {
            return {
                ticketCount: 0,
            }
        },

        created() {
            Event.$on('ticketPlus', () => {
                this.ticketCount += 1;
            })

            Event.$on('ticketMinus', () => {
                this.ticketCount -= 1;
            })
        }
    }
</script>
