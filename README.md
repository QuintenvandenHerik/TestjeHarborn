## Problem 1:
Implement a function nondecreasing_subsequences() that, given a sequence of numbers such as:
  [ 3,6,61,6,7,9,1,7,7,2,7,7,2,388,3,72,7 ]
... will identify and return each contiguous sub-sequence of non-decreasing numbers. E.g. this example input should return this array-of-arrays (e.g. or list-of-lists)
  [ [3,6,61],[6,7,9],[1,7,7],[2,7,7],[2,388],[3,72],[7] ]
(Each array includes a sequence of numbers that do not get smaller. The original order is unchanged.) For a visual example of a non-decreasing, see:
http://en.wikipedia.org/wiki/File:Monotonicity_example1.png

## Problem 2:
Implement a function all_anagram_groups() that, given many input strings, will identify and group words that are anagrams of each other. An anagram is a word that is just a re-arrangement of the characters of another word, like "reap" and "pear" and "a per" (whitespace is ignored). But "pear" and "rep" are not, since "rep" does not have an "a". Also, "the" and "thee" are not anagrams, because "the" only has one "e".
Given this example input:
[ "pear","dirty room","amleth","reap","tinsel","tesla","hamlet","dormitory","listen","silent" ]
The output should be an array-of-arrays (or list-of-lists)
[
  ["pear","reap"],
  ["dirty room","dormitory"],
  ["amleth","hamlet"],
  ["tinsel","listen","silent"],
  ["tesla"]
]

## Problem 3:
It can be seen that the number, 125874, and its double, 251748, contain exactly the same digits, but in a different order.
Find the smallest positive integer, x, such that 2x, 3x, 4x, 5x, and 6x, contain the same digits.
