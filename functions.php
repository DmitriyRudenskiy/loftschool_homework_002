<?php

function task1($arrayString, $flag = false)
{
    foreach ($arrayString as $value) {
        echo "<p>" . $value . "</p>";
    }

    if ($flag == true) {
        return implode($arrayString);
    }
}

function task2()
{
    // TODO:
}

function task3()
{
    // TODO:
}

function task4($rowCount, $colCount)
{
    if ($rowCount < 1 || $colCount < 1) {
        return null;
    }

    $content = "";

    for ($i = 1; $i <= $rowCount; $i++) {
        $content .= "<tr>";

        for ($j = 1; $j <= $colCount; $j++) {
            $content .= sprintf("<td>%d</td>", $i * $j);
        }

        $content .= "</tr>";
    }

    echo "<table>", $content, "</table>";

    task4(--$rowCount, --$colCount);
}

/**
 * @param string $str
 * @return bool
 */
function isPalindrome($str)
{
    $str = strtoupper(str_replace(" ", "", $str));

    $length = strlen($str);

    if ($length < 2) {
        return true;
    }

    if ($str[0] !== $str[$length - 1]) {
        return false;
    }

    return isPalindrome(mb_substr($str, 1, -1));
}

/**
 * @param string $str
 */
function task5($str)
{
    echo $str, " - ", (isPalindrome($str)) ? "Палиндром!" : "Не палиндром";
}

function task6()
{
    // TODO:
}

function task7()
{
    // TODO:
}

function task8()
{
    // TODO:
}

function task9()
{
    // TODO:
}
