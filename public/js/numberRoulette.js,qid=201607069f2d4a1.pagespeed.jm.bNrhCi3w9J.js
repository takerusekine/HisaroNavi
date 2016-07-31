var NumberRoulette = (function() {
    function NumberRoulette(target, numberOfDigits, interval) {
        this.target = S(target);
        this.numberOfDigits = numberOfDigits ? numberOfDigits : this.numberOfDigits;
        this.interval = interval ? interval : this.interval;
        this.maxNumber = Math.pow(10, numberOfDigits) - 1;
        this.minNumber = Math.pow(10, numberOfDigits - 1);
    }
    NumberRoulette.prototype = {
        target: null,
        numberOfDigits: 1,
        interval: 20,
        timerId: null,
        maxNumber: 0,
        minNumber: 0,
        start: function(numberOfDigits, interval) {
            if (this.timerId) {
                return;
            }
            if (numberOfDigits) {
                this.numberOfDigits = numberOfDigits;
                this.maxNumber = Math.pow(10, numberOfDigits) - 1;
                this.minNumber = Math.pow(10, numberOfDigits - 1);
            }
            this.interval = interval ? interval : this.interval;
            var that = this;
            (function rouletteLoop() {
                that.timerId = setTimeout(rouletteLoop, that.interval);
                var diplayNumber = Math.floor((Math.random() * ((that.maxNumber + 1) - that.minNumber)) + that.minNumber);
                that.target.text(addCommaForCount(diplayNumber));
            }());
        },
        stop: function() {
            clearTimeout(this.timerId);
            this.timerId = null;
        }
    };
    return NumberRoulette;
}());
