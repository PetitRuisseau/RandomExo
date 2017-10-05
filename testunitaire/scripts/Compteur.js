class Compteur {
    constructor() {
        this.compte = 0;
    }
    increment() {
        this.compte ++;
    }
    decrement() {
        this.compte ++;
    }
    reset() {
        this.compte = 0;
    }
    calcul(a,b,truc) {
        return eval(a+truc+b);
    }
}