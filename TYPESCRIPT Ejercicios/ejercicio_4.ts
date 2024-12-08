function countWordOccurrences(text: string, word:string):number{
const regex = new RegExp(`\\b${word}\\b`, 'gi');
return (text.match(regex) || []).length;
}
const text = "TypesScript is great. TypesScript is fun.";
console.log(countWordOccurrences(text, 'TypesScript'));//2