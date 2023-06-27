<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>Renew PDF</title>

    <style>
    h2 {
        margin: 0;
    }

    h1 {
        margin: 0;

    }

    ol li {
        font-size: 16px;
        list-style: number;
        font-family: roboto;
        font-weight: 400;
    }

    table {
        margin-bottom: 10px !important;
    }
    </style>

</head>

<body>


    <table style="width: 1320px; margin: auto;">
        <tbody style="width:100%">
            <tr style="margin-bottom: 10px;">
                <td style="width:20%;">
                    <img src="{{ $logo }}" alt="logo" style="width: 170px;">
                </td>
                <td style="width:58%; text-align: center;">
                    <h1 style="text-align: center; font-size: 28px; margin: 0 0 4px; color:red;">नेपाल सरकार
                    </h1>
                    <h1 style="text-align: center; font-size: 40px; margin: 0 0 4px; color:red;">कृषि तथा पशुपन्छी विकास मन्त्रालय</h1>
                    <h1 style="text-align: center; font-size: 55px; margin: 0 0 4px; color:red; font-family: roboto;">
                        खाद्य प्रविधि तथा गुण नियन्त्रण विभाग</h1>
                    <h1 style="text-align: center; font-size: 35px; font-weight: 400; margin: 0 0 4px; color:black;">राष्ट्रिय खाद्य तथा दाना रिफरेन्स प्रयोगशाला
                    </h1>
                    <h1 style="text-align: center; font-size: 28px; font-weight: 400; margin: 0 0 4px; color:black;">विश्लेषण प्रतिवेदन
                    </h1>
                </td>
                <td style="width:22%; text-align: right; font-size: 20px; font-weight: 500; font-family: roboto;">
                    <div class="contact">
                        <table class="phone-num" style="margin-left:auto;">
                            <tr style="margin-bottom: 10px;">
                                <td class="phone-num-left" style="color:red; font-size: 24px;">
                                    फोन नं.
                                </td>
                                <td class="phone-num-right"
                                    style="color:red; 	border-left: 1px solid #ff0000; padding-left:20px; font-size: 24px;">
                                    ४-२६२६६९<br>
                                    ४-२६२७३९<br>
                                    ४-२६२४३०<br>
                                    ४-२४००१६
                                </td>
                            </tr>
                        </table>
                        <div class="fax" style="color:red; font-size: 24px;">
                            फ्याक्स : ४२६२३३७
                        </div>
                    </div>
                    <div class="site">
                        <p style="margin-bottom:0; color:red; font-size: 24px;"> इमेल: info@dftgc.gov.np </p>
                        <p style="margin:0; color:red; font-size: 24px;">वेभपेज:- www.dttqc.gov.np </p>
                        <p style="margin:0; color:red; font-size: 24px;">बबरमहल, काठमाडौँ</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="fill">
        <p style="font-size: 12px; font-family: roboto; font-weight: 500; color:red;">पत्र संख्या :- <br>
            च. नं.:- <br>
            प्राप्त पत्र संख्या र मिति:-
        </p>
    </div>

    <table style="width: 1320px; margin: auto;">
        <tbody style="width:100%">
            <tr style="margin-bottom: 10px;">
                <td style="width:25%;">
                <p style="font-size: 30px; font-family: roboto; font-weight: 500; color:black;">रि प्र ०७९/८०......... <br>
                मिति : <br><br>
                लाई
                श्री 
                
           



        </p>
                </td>
            </tr>
        </tbody>
    </table>
    
    <table style="width: 1320px; margin: auto; margin-top:20px; padding:10px;">
        <tbody style="width:100%">
            <tr style="margin-bottom: 10px;">
                <td style="width:50%;">
                    <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                        नमुना विवरण : {{ $data['name'] }}</h1>
                </td>
                <td style="width:75%;">
                <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                        चलानी मिति : </h1>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="width: 1320px; margin: auto; padding-top:10px; padding:10px; border: 0.5px solid black;">
        <tbody style="width:100%">
            <tr style="margin-bottom: 10px;">
                <td style="width:50%;">
                    <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                    

                        नमुना दर्ता मिति :
                        @php
                            use Carbon\Carbon;

                            $dartaDate = $data['created_date'];
                            $sdate = Carbon::parse($dartaDate)->format('Y/m/d'); 
                            echo $sdate;

                        @endphp
                </h1>
                </td>
                <td style="width:75%;">
                <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                        नमुना कोड : {{ $data['id'] }}</h1>
                </td>
            </tr>
            <tr style="margin-bottom: 10px;">
                <td style="width:50%;">
                    <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                        प्याकेजिंग अवस्था : {{ $data['condition'] }} </h1>
                </td>
                <td style="width:75%;">
                <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                    विश्लेषण आवश्यक: @foreach($data['parameters'] as $parameter)
                    {{$parameter['name']}} ,
                    @endforeach
                </h1>
                </td>
            </tr>
            <tr style="margin-bottom: 10px;">
                <td style="width:50%;">
                    <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                    विश्लेषण शुरु मिति : {{ $data['condition'] }} </h1>
                </td>
                <td style="width:75%;">
                <h1 style="font-size: 32px; font-weight: 400; margin-bottom: 10px;">
                    विश्लेषण समाप्त मिति : 
                    @php
                        $endDate = $data['completed_date'];
                        $edate = Carbon::parse($endDate)->format('Y/m/d'); 
                        echo $edate;
                    @endphp
                </h1>
                </td>
            </tr>
        </tbody>
    </table>

    <p style="margin:2px 0; color:black; font-size: 20px; text-align: center;">विश्लेषण नतिजा</p>

    <table style="width: 1320px; margin: auto; border: 0.5px solid black; margin-bottom: 100px;">
            <tr>
                <td style="border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400;">क्र. स.</p></td>
                <td style="border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400;">परिक्षण पारामिटर</p></td>
                <td style="border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400;">परिक्षण विधि</p></td>
                <td style="border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400;">एकाई</p></td>
                <td style="border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400;">नतिजा</p></td>
                <td style="border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400;">तोकिएको मापदण्ड</p></td>
                <td style="border-bottom: 1px solid black; text-align: center;"><p style="font-size: 30px; font-weight: 400; text-align: center;">कैफियत</p></td>
            </tr>

            
            @foreach($data['parameters'] as $parameter)
        
            
                <tr>
                    <td style="border-right: 1px solid black; @if($parameter['id']<count($data['parameters'])) border-bottom: 1px solid black; @endif text-align: center;"><p style="font-size: 24px; font-weight: 400;">{{ $parameter['id'] }}</p></td>
                    <td style="border-right: 1px solid black; @if($parameter['id']<count($data['parameters'])) border-bottom: 1px solid black; @endif text-align: center;"><p style="font-size: 24px; font-weight: 400;">{{ $parameter['name'] }}</p></td>
                    <td style="border-right: 1px solid black; @if($parameter['id']<count($data['parameters'])) border-bottom: 1px solid black; @endif text-align: center;"><p style="font-size: 24px; font-weight: 400;">{{ $parameter['ref_test_method'] }}</p></td>
                    <td style="border-right: 1px solid black; @if($parameter['id']<count($data['parameters'])) border-bottom: 1px solid black; @endif text-align: center;"><p style="font-size: 24px; font-weight: 400;">{{ $parameter['units'] }}</p></td>
                    <td style="border-right: 1px solid black; @if($parameter['id']<count($data['parameters'])) border-bottom: 1px solid black; @endif text-align: center;"><p style="font-size: 24px; font-weight: 400;">{{ $parameter['result'] }}</p></td>
                    <td style="border-right: 1px solid black; @if($parameter['id']<count($data['parameters'])) border-bottom: 1px solid black; @endif text-align: center;"><p style="font-size: 24px; font-weight: 400;">{{ $parameter['mandatory_standard'] }}</p></td>
                    @if($parameter['id']== 1)
                    <td rowspan="5" style="text-align: center; height: 100%;"><p style="font-size: 24px; font-weight: 400; text-align: center;">{{ $data['remarks'] }}</p></td>
                    @endif
                </tr>

            @endforeach



            

            
    </table>

    <table style="width: 1320px; margin: auto; margin-top: 20px; margin-bottom: 50px;">
        <tbody style="width:100%;">
            <tr>
                <td style="width: 50%; text-align: left;">
                    <h1 style="text-align: center; font-family:roboto; font-weight: 400; font-size:24px;">.................. <br>
                    प्रमाणित गर्ने<br>
                    (...................)<br>
                    वरिष्ठ खाद्य अनुसन्धान अधिकृत
                    </h1>
                </td>

                <td style="width: 50%; text-align: right;">
                    <h1 style="text-align: center; font-family:roboto; font-weight: 400; font-size:24px;">.................. <br>
                    आधिकारिक दस्तखत<br>
                    (...................)<br>
                   उप-महानिर्देशक
                    </h1>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="max-width: 1320px; margin: auto; padding-top: 15px;">
        <p style="width: 16.5%;font-size: 14px; margin: 0px;">नोट:</p>
            <p style="font-size:12px; margin: 0px; ">१. यो विश्लेषण नतिजा यस प्रयोगशालामा प्राप्त भएको नमुनाको लागि मात्र लागु हुनेछ |</p>
            <p style="font-size:12px; margin: 0px;">२. यो विश्लेषण प्रतिवेदन प्रयोगशालाको लिखित अनुमति बिना पुनः प्रकाशन गर्न पाइने छैन |</p>
            <p style="font-size:12px; margin: 0px;">बोधार्थ : श्रीमान महानिर्देशक ज्यू; खाद्य प्रविधि तथा गुण नियन्त्रण विभाग, बबरमहल, काठमाडौँ |</p>
    </div>

</body>

</html>