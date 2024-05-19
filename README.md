# PHPExcel_test

This is a test project that utilizes the PHPExcel library and the PeachPie Compiler for C# rewriting.

- **Note**: Only rely on peachpie.sdk compiled by the [phpcs_core](https://github.com/wujwmail/phpcs_core) project

# Introduction

This project serves as a test to validate the functionality of the PeachPie (C#, PHP) version of the PHPExcel library.
  > For more information about PeachPie, please refer to: [https://github.com/peachpiecompiler/peachpie](https://github.com/peachpiecompiler/peachpie)        
  > For more information about PHPExcel, please refer to: [https://github.com/PHPOffice/PHPExcel](https://github.com/PHPOffice/PHPExcel)       

## Project Structure

This project consists of two main components:

1. **ExcelApp**: This is a PeachPie application project used for testing.
2. **PHPExcelPhpCsLib**: This is a library project that includes the implementation of converting the PHPExcel library into C# code.

## Known issues:  

1. Associated arrays cannot use UTF-16LE/UTF-16BE encoded strings as keys!

2. The mb_ series functions have errors when handling UTF-16LE and UTF-16BE character encodings! For example:


  ```
  <?php

    $utf8_str="这是一个测试";

    $iconv_utf16=iconv('UTF-8', 'UTF-16LE', $utf8_str);

    echo "iconv_to_UTF-16: ".base64_encode($iconv_utf16).PHP_EOL;

    $mb_utf16 = mb_convert_encoding($utf8_str, 'UTF-16LE','UTF-8');

    echo "mb_xx_to_UTF-16: ".base64_encode($mb_utf16).PHP_EOL;


  ```

  Native PHP execution results:

          iconv_to_UTF-16: 2Y8vZgBOKk5LbdWL
          mb_xx_to_UTF-16: 2Y8vZgBOKk5LbdWL

  Peachpie execution results:

          iconv_to_UTF-16: 2Y8vZgBOKk5LbdWL
          mb_xx_to_UTF-16: 6L+Z5piv5LiA5Liq5rWL6K+V