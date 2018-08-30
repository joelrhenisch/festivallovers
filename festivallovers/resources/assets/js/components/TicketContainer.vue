<template>
    <div class="d-flex">
        <div v-for="ticket in tickets" class="ticketContainer">
        <div class="ticketGreen">
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
                       {price: '50.–', title: '1 Tag Pass', zahl:'0'},
                       {price: '100.–', title: '3 Tag Pass', zahl:'0'},
                       {price: '200.–', title: 'VIP 1 Tag', zahl:'0'}
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