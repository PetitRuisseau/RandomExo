it('should add 2 to 2', ()=>{
    let result = addition(2,2);
    expect(result).toBe(4);
});

it('should add -4 to -2', ()=>{
    let result = addition(-4,-2);
    expect(result).toBe(-6);
});

it('should add 4 to -2', ()=>{
    let result = addition(4,-2);
    expect(result).toBe(2);
});

// it('should add bloup to 2', ()=>{
//     let result = addition('bloup',2);
//     expect(result).toBe('bloup2');
// });

// it('should add bloup to -2', ()=>{
//     let result = addition('bloup',-2);
//     expect(result).toBe('bloup-2');
// });

it('should add bloup to 2', ()=>{
    expect(addition.bind(null, 'bloup', 2)).toThrowError();
});

it('should be 2', ()=>{
    let ok = new Compteur();
    ok.increment();
    ok.decrement();
    ok.increment();
    ok.increment();
});

it('should be 0', ()=>{
    let ok = new Compteur();
    ok.increment();
    ok.decrement();
    ok.increment();
    ok.increment();
    ok.reset();
});

it('should be 0', ()=>{
    let ok = new Compteur();
    ok.increment();
    ok.decrement();
});

it('should be -5', ()=>{
    let ok = new Compteur();
    ok.decrement();
    ok.decrement();
    ok.decrement();
    ok.decrement();
    ok.decrement();
});

it('should use eval +', () => {
    expect(calcul(1,2,'+')).toBe(3);
})

it('should use eval -', () => {
    expect(calcul(1,2,'-')).toBe(-1);
})

it('should use eval *', () => {
    expect(calcul(1,2,'*')).toBe(2);
})

it('should use eval /', () => {
    expect(calcul(1,2,'/')).toBe(0.5);
})

it('should use eval and error', () => {
    expect(calcul.bind(1,'truc','/')).toThrowError();
})