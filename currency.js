class Currency {
    constructor() {
        this.url = "http://api.freecurrencyapi.com/v1/latest?apikey=dLqgQ93O7JmyowNdQdrqyhrhpTN6JcJX2CQurZOg&base_currency=";
    }

    async exchange(amount, firstCurrency, secondCurrency) {
        const response = await fetch(`${this.url}${firstCurrency}`);
        const result = await response.json();

        const exchangedResult = amount * result.data[secondCurrency];
        return exchangedResult;
    }
}