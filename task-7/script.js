let input = "";
let operation = "";
function display(value) {
  input += value;
  document.getElementById("result").value = input;
}
function math(operator) {
  operation = operator;
  input += operator;
  document.getElementById("result").value = input;
}
function calculate() {
  let operands = input.split(operation);
  let operand1 = parseFloat(operands[0]);
  let operand2 = parseFloat(operands[1]);
  let result;
  switch (operation) {
    case "+":
      result = operand1 + operand2;
      break;
    case "-":
      result = operand1 - operand2;
      break;
    case "*":
      result = operand1 * operand2;
      break;
    case "/":
      result = operand1 / operand2;
      break;
    case "%":
      result = operand1 * (operand2 / 100);
      break;
  }
  input = result.toString();
  document.getElementById("result").value = input;
}
function clearResult() {
  input = "";
  document.getElementById("result").value = input;
}
function backspace() {
  document.getElementById("result").value = document
    .getElementById("result")
    .value.toString()
    .slice(0, -1);
}
