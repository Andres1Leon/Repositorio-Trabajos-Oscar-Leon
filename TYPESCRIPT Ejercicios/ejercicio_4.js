function countWordOccurrences(text, word) {
    var regex = new RegExp("\\b".concat(word, "\\b"), 'gi');
    return (text.match(regex) || []).length;
}
var text = "TypesScript is great. TypesScript is fun.";
console.log(countWordOccurrences(text, 'TypesScript')); //2
