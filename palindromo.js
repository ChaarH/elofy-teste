let string = "arara";
let palindrome = false;

check(string)

function check(parameter) {
    parameter = parameter.toLowerCase()
    let check = parameter === reverse(parameter)

    console.log(check)
}

function reverse(string) {
    let reverse = '';
    for (let i = string.length-1; i >= 0; i--) {
        reverse += string[i]
    }

    return reverse
}
