"use strict";
function solution(words) {
  let newWords = [];
  let copyWords = Array.from(words);
  let length = words.length - 1;
  for (let i=0; i<length; i++) {
    newWords.push(copyWords[i]);
    
    copyWords.splice(i, 1);
    console.log('copywords ', copyWords, 'newwords ', newWords);
    let lengthArr= copyWords.length;
    for (let j=0; j<lengthArr; j++) {

      if (newWords[newWords.length-1].charAt([(newWords[newWords.length-1].length - 1)]) == copyWords[j].charAt(0)) {

        
        newWords.push(copyWords[j]);
        copyWords.splice(j, 1);
        j = 0;
        lengthArr--;
        console.log('совпадение - ', newWords);
      }
    }
    if (newWords.length == words.length) {return copyWords} 
    else {
      copyWords = Array.from(words);
      newWords =[];
    }
  }


}
console.log(solution(["excavate", "endure", "desire", "screen", "theater", "excess", "night"]));