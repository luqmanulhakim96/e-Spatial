<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Surat</title>

      <style type="text/css">
          /* @page {
              margin: 0px;
          } */
          @page {
              /* size: 8.5in 11in;
              margin: .5in; */
            }
          .page-break {
              page-break-after: always;
          }
          html{
            page-break-after: always;
          }
          body {
              margin: 0px;
              line-height: normal;
          }
          * {
              font-family: Verdana, Arial, sans-serif;
          }
          a {
              color: #fff;
              text-decoration: none;
          }
          p{
              margin: 0;
          }
          header{
            background-color: #ffffff;
            color: #000000;
            padding-top: -30px;
            padding-left: -35px;
            /* padding-right: -20px; */
            padding-bottom: 5px;
          }
          /* .invoice table {
              margin: 15px;
          } */
          .information {
              font-size: 12pt;
              line-height: normal;
              margin: 5px;
              background-color: #ffffff;
              color: #000000;
              width: 100%;
              /* margin:113.3858267717px 74.078740157px; */
              margin-left: 50px;
              margin-right: 25px;
              margin-top: 5px;
              margin-bottom: 9.448818898px;
          }
          /* .information {
              background-color: #ffffff;
              color: #000000;
              width: 100%;
              margin:113.3858267717px 74.078740157px;
              /* padding-left: 113.3858267717px;
              padding-right: 74.078740157px;
              padding-top: 75.5905511811px;
              padding-bottom: 9.448818898px; */
              /* margin-left: 113.3858267717px;
              margin-right: 74.078740157px;
              margin-top: 75.5905511811px;
              margin-bottom: 9.448818898px; */
          /* } */
          table{
            font-size: 12pt;
            /* width: 1%; */
            /* table-layout:fixed;
            width:100%;
            overflow-x:auto; */
            /* padding-left: 125px; */
            table-layout: auto;
            width: 100%;
            white-space: normal;
          }
          /* td{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
          }
          tr{
            min-width: 10px;
            width: 20px;
            max-width: 20px;
          } */
      </style>

  </head>
  <header>
      <img src="{{ public_path('qbadminui/img/Letterhead-JPSM.jpg') }}" width="780px"/ style="!important">
  </header>
  <body>
    <div class="information">
        {!! $surat_baru !!}
    </div>
  </body>
</html>
