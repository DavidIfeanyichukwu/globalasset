<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{{ $examdpi->test_house }}</title>
  <style type="text/css">
    body,
    td,
    th {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      color: #000;
    }

    table {
      display: table;
      border-collapse: separate;
      border-spacing: 0px;
      border-color: grey;
      width: 100%;
      max-width: 100%;
      margin-bottom: 15px;
      background-color: transparent;
      color: grey;
    }

    thead {
      display: table-header-group;
      vertical-align: middle;
      border-color: inherit;
    }

    tbody {
      display: table-row-group;
      vertical-align: middle;
      border-color: inherit;
    }

    th {
      text-align: inherit;
      font-weight: bold;
    }

    td,
    th {
      padding: 7px;
      vertical-align: top;
      border: 1px solid grey;
    }

    h2 {
      font-size: 22px;
    }
    .no-border {
      border: none;
    }
  </style>
</head>

<body>
  <table border="0">
    <tbody>
      <tr>
        <td class="no-border" rowspan="2">
          <div align="left"></div>
        </td>
        <td class="no-border">
          <div align="center">
            <img src="../gl-logo-1.png" alt="Global Lifting" width="210" height="56" align="absmiddle">
          </div>
        </td>
        <td class="no-border" rowspan="2">
          <div align="left"></div>
        </td>
      </tr>
      <tr>
        <td class="no-border">
          <div align="center">
            <h2>
              <strong>Certificate of Test
                 Examination and DPI</strong>
            </h2>
          </div>
        </td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC" width="33.3333%">Client</td>
        <td width="33.3333%">&nbsp;</td>
        <td bgcolor="#CCCCCC" width="33.3333%">{{$examdpi->test_house }}</td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </td>
        <td>&nbsp;</td>
        <td bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
    </tbody>
  </table>
  
  <table>
    <tbody>
      <tr>
        <td>Certificate No</td>
        <td>&nbsp;</td>
        <td rowspan="2">&nbsp;</td>
        <td>Customer Requisition No.</td>
        <td>Date of Test/Examination</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Customer Order No</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Date of Expiry</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  
  <table>
    <tbody>
      <tr>
        <td>ID Number </td>
        <td>Qty</td>
        <td>Description</td>
        <td>SWL/Payload</td>
        <td>Proof Load</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  
  <table>
    <tbody>
      <tr>
        <td colspan="3">
          <div align="center">
            <strong>NDT Inspection Details</strong>
          </div>
        </td>
      </tr>
      <tr>
        <td width="33.3333%">Standards</td>
        <td width="33.3333%">Dye Penetrant</td>
        <td width="33.3333%">Test Procedure</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Inspector</td>
        <td>Qualification</td>
        <td>Results</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  
  <p>I hereby certify that the equipment described on this certificate has been tested, examine and found
     to be free from flaws or other defects.</p>
  <table>
    <tbody>
      <tr>
        <td width="33.3333%">Name</td>
        <td width="33.3333%">Signature</td>
        <td width="33.3333%">
          <div align="center">Company Seal</div>
        </td>
      </tr>
      <tr>
        <td height="72">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  
  <p align="center">© Global Lifting Services Nig. Ltd.</p>


</body>

</html>