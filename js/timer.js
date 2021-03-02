const app = new Vue({
    el: '#app',
    data:{
       hour:0,
       minutes:0,
       seconds:0,
       price:0,
    },
    created(){
        var self = this;
        setInterval(function(){
            self.actualizarTiempo();
        },1000);
        this.actualizarTiempo();
    },
    methods:{
        actualizarTiempo(){

                this.seconds++;
                if(this.seconds==60){
                    this.seconds=0;
                    this.minutes++;
                }
                if(this.minutes==60){
                    this.minutes = 0;
                    this.hour++;
                    this.price = this.price+3000;
                }
        }
    },
    computed:{
        getTiempo(){
            return this.hour+":"+this.minutes+":"+this.seconds;
        }
    }
})