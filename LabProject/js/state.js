class ValidationError extends Error{
    constructor(message){
        this.name = message;
    }
}

const validateNumberInput = (num1,num2,num3) => {
    if(typeof(num1)!="number"){
        console.log("LOL");
    }
}   

validateNumberInput(true,4,2);