class ToDo {
    toDo:string[]=[];
    constructor(){
        this.toDo.push('ok');
    }
    ajout(value:string) {
        this.toDo.push(value);
    }
}
