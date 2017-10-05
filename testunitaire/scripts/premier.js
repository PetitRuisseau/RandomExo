let addition = function(a,b) {
    if (typeof(a) !== 'number' || typeof(b) !== 'number') {
        throw new Error('expect number');
    }
    return a+b;
}
let calcul = function(a,b,truc) {
    if(typeof(a) !== 'number' || typeof(b) !== 'number' || typeof(truc) !== 'string') {
        throw new Error('expect number');
    }
        return eval(a+truc+b);
    }