// Options the user could type in
let date = new Date(); 
let currentdate = new Date().toLocaleDateString();
let time = new Date().toLocaleTimeString();
const prompts = [
    ["hi", "hello"],
    ["what can i donate", "donate"],
    ["trust in madurai", "ngos in amravati"],
    ["how can i package my donations", "package donations"],
    ["how my donation is used"],
    ["what are the guidelines for donating"]
];

// Possible responses, in corresponding order
const replies = [
    ["Hello!", "Hi!"],
    ["You can donate clothes, food, books, money, or any other items in good condition."],
    ["Share4Good old age Charitable Trust is one of the NGOs in Amravati."],
    ["You can package your donations in boxes or bags."],
    ["Your donation will be used to support various programs and initiatives."],
    ["Ensure that your donations are clean and in good condition."]
];

// Random response for any other user input
const alternative = [
    " 😢sorry i am still under development "
];

// Default message for users
const defaultMessage = "Welcome! You can ask me questions like 'What can I donate?', 'How can I package my donations?', or 'What are the guidelines for donating?'";

function getResponse(userInput) {
    console.log("Input received:", userInput); // Temporary debugging statement
    userInput = userInput.toLowerCase().trim();
    if (userInput === "hi" || userInput === "hello") {
        return defaultMessage;
    }
    for (let i = 0; i < prompts.length; i++) {
        if (prompts[i].includes(userInput)) {
            const index = prompts[i].indexOf(userInput);
            return replies[i][index];
        }
    }
    // If no match found, return alternative response
    return alternative[Math.floor(Math.random() * alternative.length)];
}

// Example usage:
const userInput = "hello";
console.log(getResponse(userInput));
