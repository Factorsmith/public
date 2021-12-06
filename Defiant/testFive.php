<?php
# D. LeAnn Smith, December 2021
# The input text file location is assumed to be the Current Working Directory of this php source 
# since full path syntax differs accross OSs

define('TEST_PATH_FILE',"resources.txt");

echo "---- Beginning of Defiant Test Five: ----"."\n";
if (!file_exists(TEST_PATH_FILE)) echo "file not found: ".TEST_PATH_FILE;
else {
    $contents = file_get_contents(TEST_PATH_FILE);
#echo "Contents of: ".TEST_PATH_FILE.":\n".$contents."\n";
 
    $keywords = preg_split('#\[(.*?)\]#', $contents, -1, PREG_SPLIT_DELIM_CAPTURE);
    # above array has blank entries so use array_fllter
    print_r(array_filter($keywords));
}
echo "---- End of Defiant Test Five. ----";
?>
