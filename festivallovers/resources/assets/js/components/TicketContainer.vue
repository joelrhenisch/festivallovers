<template>
    <div class="ticket__vuejs-container">
        <div v-for="ticket in tickets" class="ticketContainer">
        <div v-bind:class="{ ticketGreen: ticket.green, ticketGrey: ticket.grey }">
        <img src="icons/tickets_standard_white.svg" height="60px" alt="ticket">
                <p class="title">{{ticket.title}}</p>
                <p class="price">{{ticket.price}}</p>
        </div>

            <div class="ticketsArea">
                <div class="area-container nomargin">
                    <div class="ticketsSmaller">
                        <div class="container">
                            <div class="text">
                                <span class="textRegGreen">Verfügbare Tickets</span>
                                <div class="d-flex">
                                    <span class="textBoldGreen">960</span>
                                    <span class="textRegGrey"> / 1200</span>
                                </div>
                            </div>
                            <div class="ticketsSymbol">
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratF"></div>
                                <div class="QuadratQ"></div>
                                <div class="QuadratQ"></div>
                            </div>
                        </div>
                    </div>

                    <div class="ticketContainer nomargin">
                        <div class="ticketsCounter">
                            <div class="container">
                            <button class="box" @click="removeTicket(ticket)">
                                <img src="icons/steuerung_minus.svg" width="20px" alt="ticket minus">
                            </button>
                            <p class="fontticket"> {{ ticket.zahl }} Tickets</p>
                            <button class="box" @click="addTicket(ticket)">
                                <img src="icons/steuerung_plus.svg" width="20px" alt="ticket plus">
                            </button>
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
        data() {
               return {
                   tickets: [
                       {price: '75.–', title: '1 Tag Pass', zahl:'0', color:'ticketGreen', green: true},
                       {price: '375.–', title: '3 Tag Pass', zahl:'0', color:'ticketGreen', grey: true},
                       {price: '225.–', title: 'VIP 1 Tag', zahl:'0', color:'ticketGrey', green: true},
                       {price: '420.–', title: 'VIP 3 Tage', zahl:'0', color:'ticketGrey', green: true}
                   ]
               }
        },

        methods: {
            addTicket(ticket) {
                ticket.zahl++;
                Event.$emit('ticketPlus');
            },

            removeTicket(ticket) {

                if (ticket.zahl > 0) {
                    ticket.zahl--;
                    Event.$emit('ticketMinus');
                }
            },
        },
    }
</script>