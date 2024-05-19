<?php
include('dbcon.php');
$ci = $_GET['ci'];
$co = $_GET['co'];
$rt = $_GET['rt'];
$nr = $_GET['nr'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ac room form</title>
</head>
<style>
    body {
        background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAywMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAIFBgABB//EAD4QAAIBAwMBBQYEAwYGAwAAAAECAwAEEQUSITEGE0FRYRQiMnGBkSOhwdEVseEkQlJicvEWM0OCkvBTVKL/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMABAX/xAAmEQACAgICAAYCAwAAAAAAAAAAAQIRAyESMQQTIkFRYSMyFDNx/9oADAMBAAIRAxEAPwDIAc0aMV4q0RFrpRNkxGK9CYqaCp7aYB4i5owGKgvFEHNE1EcV7ivdpr0DJrAo9Qc0wi0NFpheBRQrO6VE8mpMa5cUwKB45riKk2AaiTQsJAio45onWpBMmsYgq0VV4r0JxmpD5jFEB4BXZBHBqq7QXDRRKqvtB64qehSl7cLgsepNDlug8XVlgagVzR9uaJHbFzyMCmEFFjya5lxViYFQcUvJHWAIOmajsptkxQiBWMU6iiqtQSjLXPZ1UTQUdY91CUU1B1pkxWR7rHWuVRTMqgqCKCo55pgECteBaYKcVAJWMcgoleKuKltNYFHhrzcFBJIA8zUiKVvpO5tpHAckDjaufvWboKide3K21tJOwLBE34UdRQ7S7ju3lEXIjwCfUjNZDUtUdrL2dXcDdnk9PMeoo+g3cghjigO6aSXdgjOT0GfQdan5mx+OjZqKIFJBwcHFRtYGSJVZ2cjqzdTTSx4GaoibRm9UWext3MN1MS3JB5H9KprDtCbLJG5wT76M3HzB8PlWzv7ZZ4ShRWPQAisD2gtYrWfbDGAMckefqKlktbQ6Vqi51u5h1SJGgkDJx0OPv/tVp2aQsjL1Kj6CsHBctCdwXIIwPStv2L1S1dzFMwilcAIGONxoQnctmlF1RqY4ABlqLt4xUrmWK3ieSZ1jRfiZjgCs7c9qYmZl0y2kuypwX+Ffzro5JEaZfyDjilZcVUxahr0/vGzgjUdVOafikeWIGRNrnwpk7FaISGgHrTDqaFtogKdRRVqCiiqK5TtCJR04oKUxGAa1gaDAZWobceFEUYqYANNYtEUzjFEWOpItTA8AKNgoj3VRaMimkXHBrnUGjZqEjxVHqusW8avGsNw/UGRcoFPzPWtEyDNV2qwWSwPc3ke9UXoMk5zxgUkhkjASq2oCa43N+Gu495gZHlkYBP50SH2iK1SW2Dw95ySgzuUHjxyBTc1rc6hPBNLELa3lb+zQqONo5J+3nXthLd97HewrukV+6K491gOi49R+eKjWxzQaPZrPCp/iVx7Qw3MDuUgfI9R61owpCAFskDljx08aHY9xdQQ3SRBcjjK4K+lK6lqtlDa3CpeQ9+FICK4LZx5VZSpCcRSbtFp0MrRyyOGU4JEZIPyNZjtJdW2oMj2MmY/7wIKtn5Gqy7JA3AvvfxxUILOecooRzuO0Y8TUZZHLQyVAjANqEOSM4PpT+nHuJ8tbvKdpCoCRk/pUZIJIHaK4XYyr0PB6Vr9F0WWPTlumwl2y8MwDEZPUjkfekhFuQ0tKysjs9U125LajMxQKGjUe6i+I+fzrVWFnpmnRYaeAEjnc4HjWautE1C5uHMk88iluFL4GM/71G57P29kwmuAkaOD7p6+OP0rpVr2IOjZyX9iBxdW4HpIKEXilXfFIjr5qc18zvTEimGEqpDjHgfL9qstMluNKlg7yVtkmAwx1Xz/OjHNuhZYtWbC6kSGJpJPhUZqlbXJlYhdOuWHgdnX8qd1HVrezUKR30uARGoz16ZqlftHq247dKYDyGf2qkpIRIFaa3bOgNyTC3qCR96tLaeG45gmSQeO05rCiaNjz49cippmJw8EhX/ScVzcjqPoCjiio3IHAPzrJi/up7UxxX/4iL8OwKzffrVRa6hPb6hHcu7yOh5DsSceIpFkTdIpLG4q2fSkOaIM0vZSpc20c0JDI43Aim1U1SxKJIfIZ86FdXotWAkgcxsCBIOgbHGaR1e6A/ssaztMcHEPXn1rO6jqLtDNbSTMkcYztkcM5bwwR4edDkZo0/ZrVLjU7RXlgxgcyeBq5INfNtOeWC0Clbp4CoZXh6A/f0r6NYTxXdukkDhlOMk9R86KmZRPStRMKtyVzTW0VJY6zkMolbewRraSvsAMcbbDj4eKrdI7PdzFNHKx7mco42+DDBzmrbULu0exvIo7mF5kibciupK8HwzVhbgCGPx9wc/SluxuJR9oGmMIsrQP3jj3ivgPnVDZdl5hI9xdsEiTnJOABW+CDOQBnzxWT7b3Vw7xWFspIK7mA43eQ+VZ/IGjMahcWcU+20T2lguAX4UY8ceXSmNGvg9wpmZCIslnwNkQGOngT/Skruwe3C2hQm6dQX9WOOPsaiti5uIbCBnLP8QAxu+dKrsVlz2hji1bSxq9vEyLESGOclk49458c9B4VK7ubzRNQiu9ztEQI5Iz0KdAT61obvTUtuydxZImMW7ZHqBmjezxajo0JdA3eQKf/AM1VR39it6odimjlhWeMqVZQwast2gm0a7ujNdalH+ECqwxPyW9cc/aoag17a6QtmTsjJ2A9WfxxnwHH1rIS3EMMRt4rdWnPxTHw9BRlkomoHag0bkLBMrIx3Y24I586nNdTNsl3EkKF3denrSaEIwDruJHNSV2bODx5Vz89leIQXNyZMpIQxOcjrmim+1FSQLqXr/ipcuI5PdXnw9KIpXHOfritzNxsTvMd7nu9n+UV4In2gxkij3ErzEvId8h6tUEYgY8qF7CQLS5xJHu9aOJlmRUuFLqOBIPjX96gkm5x0J+dXK6ZvsvaGilSMkJ3i8pu8s+fWknON7K4ozl+pZdkLr2fFmz97bzP+DIvIVj1Uj+7mtLLqFjADvu4RgcjeCfKsTZ6FdXUx9hbftxncO7K/Q/zp+Tsdcx3csVxfWcO3Bd9xbg/Kss8Fpsd4Mj6iWV/eJqtsy6VPjcdszIMOPT0FAsezkVlYXco2SPL7kZBBB3ED+ZrLNYoZ5ESeJwjFfdTJOD1q003UL2y01LeBi0JkDozKODkHj60zyR7smoS6aLO10i9jlgvbSYsS7LIoXhGyR0/w8c1pYZrSxt2uLgpa7+HDHA3DIOPOscNR1EqVa7MS7iSEbA689AP51Wy3W/E07d5MyAliu4j0yTWWRMZwcTVX3bWBT3emQG4fON7nav7n8vnWb1TWdUvfdvZpY426RoCin96QF0+0K7McHjBxUlu0XehG9GOdrnIpvM+hGm/cXwMrkLlTxxVvYdpdUsDtjue+jHHdz+9x8+tAtxaTpKohCOFLJls54q+0zSlnkjCR5HGdiZJpJ+IUd0Ux+GcupFhpvbmKQ7Lyxljb/HBmRf3q/t1sdTePUofxcAqGKkdDgjBoE2m28D2VukKwrLuEjTgjPSq3S5ptF1WTT7wYhkfAbPCt0B+RGPyqePxXKVNHRk8Jxjp2OS6Kk+uvfy8qqjaD50npWkTQ67PezLuAyEJ9fKtOw8KE2R4GuxNHE4A7he9hkj/AMaFfuKrOy8pm7P2R5yI9v2OKtfI1S9k1H8KlhYe4lxNHj0DGmvaF4aMh2p3SX8gluTMisduAQoGfDwPzHlVI0YzuVcDJAXOa02raNdzag8FpExhSTEMa8rHx1P2oU2mRwvDC7RNKCGb8URhR4gk5x+Z9KhkTbGiqKNLfEpLhiSBjjoKh3ahyiuMNyPlVpqF8sCzRwxwCOQ92Sj72GDn0+9Uhkw6nGceFRadj2ickWD1586h3YPXGaPKDk4OVZQyN6eVLg8cM32ooLSRtv8Ahm3upUiiltg7glA6mPcBzVaeyzzBWjjlyRldhDj7daY0WQaVNK8LtNvjKqJDnBbx/KgNBqKys0N8jZOQrpkA+YpOORass3hatoTl7PXNu+CyhhwRIhQ/rUn/AIjHZmzaNHhLbinB8sU9BJq0ZXddHaOu2d/e+h4zVlDrkwKi40i0lESsCzsAXyRySPIUsudbQYxx+zM6+pXaSQkqY+4ChAQcDAx49elXFvqNzeBJZLiNQzDvN0xQdeRjx4q6k0S21HtLJZQqi26oHZw20R5A6/PNButAtrGG9lhJlitmSPfjO5mGcD7iueUofGy8IzT0yl7WanIt7qAsbjFnd9VHQAHjA6DoOR51T2Wp/wBoVrpMW42bgngF4JAOOTR9btoQTlcMEL5I5JBxjNV2nw+0Zi5IbxHhXTGuFnPNyWSrLhriyMlw0UFyRvZoyXUceR5PhVBI7P72wIMY4zjitRb2Yt9CvbqSWF96BcSx+8PD3SOh5/lVZfSfgBu4KAOfw2jX3Tjk9M/zrQavQc0ZV6mUjCQgE55GR8qjuzwRn6Uz7QBZNGQVl3jHXG3HII6eX2oXcsNveMRvUMPqOOlWX2cjXwEinMeDgY/PpWn097m9sw8d0yoeCpduorMLAjDb3g3ZYKxyAcDy9a0ug6hpum25glYyXEn4kUwbMWMfDInUHPl0BzST+imLT30PJa3uoywwyXDSj/lxhs4TAJxjywppi4X2u3FncssdxANsLk/GoPw/tSulavZXzWqaptixde97KoXCYYZLHryR08AfOrbUksLy2a4sGkKhn+L4hg9SOo8DmuZyd00dsEq9DK//AI2aOOOMIrvGm2R26MQevpxTcnbGD+HRNGFa8cHKMcLnOOtYC8Ki4mwPdLk588UMAsu0YAznJPT+ldsZaOCTds1tn25uVkkN3bJIjEFdrYK/X05+9OaNr9pbWF40pMbS3DyomeQG5/cVgmRVdgDjHWmJCTbxuWwwB8etHkxE2W8HaG+tbi4lRxiZgxVufPFVl/qUt3ce0ztmYHO7zx0pLlt3vHjzrzCkc846+ta37gtk5ZzO5fhVP90dBXkYUn3yQoPxYzXqqAjEJlTRBA7KMZBbmlbQ6Qa0Amt3hBJeImRDjqPEfrSryNuP6Ue2mkS5ilwu6MgnaMZHTFNX2mSJdP7OC0TYZCPIjI/nS6TKqLkiB1AxpGrAH3Afd8OMV6dWBlJiiJBPHPhx+351VFP83T/KaY0+RLa8imkXvBGQ2wISGI6Z9Kps507dWW8Gpe6u5yMZDZPjwP1NQ/jCKccsMckjqaqpvxJ5HD4DEn4T4mhd0DwHH/i37Udmbd0jQ2WpyPOBaOVeU7WAyCfAfTmozdobowTWcsshh7zc6bsqx6Z6Z6ClNDVrW+hvEZGMLB0G8DLAgjO7HFBubOeaeWV5IN0jljhuMk58KSlZS5cezy91B7g7lkYArtK5zxnPSp2qjdBwVIbOQ2AOKVNpMnQr/wBvNQ7icZ4J+tZr4Am07ZfySTLABIU7l22mNScDIPOOnhVr2Z7KpqmhfxO8v2D99sRFf3gijkkE9T4fKsUYrjBB3YPhmjRLcKhCllT8hSOOqH8zd0MSTWsWot3Bc2W/CSSLyV88etEWW3uFmD5BHKug6emPKlohd42q+0dMFc/pRTZysq5eFXByXwwJ/KmaQE5fB7N3DwrFAmXjQkuFwT6H/wB8aauILfbAYgjxtjftcBwccgjy6gUAWs5iK+024crjOD+1AOnyxLuM8JA8Vfp9KSh269i9thafwuWGPSVSVWBN60zZ2s2Ph6EDPSj3Ec1lI1pcnbIiqCEkGcMB9cVTwahdQWggjvABjBXBIYeWCKUvp7q8uO+uJhJLgAsQQSB4dKVRle+hpTgo67GNWsrpHDPbzFXBZWZfjA6mkhKIo9yqMnn/AEiie03hQRvPIY1zwWbgeOBUihjk7x8nAy3P5Hzqqsi6ezu/DOkdwqOxHEjLnbXjRmeBUChGQ+8FHh04pTvC0n4gOc8nNGLPHPLx1XIw3n/vTOxFR7dWQjgjkhkEmQC5AIwT4YPl0pUxMqbugBxn1pq3vHt3WWOMgg8Zbr+dMe0e2Hu3jCjnlSB4/wBaW5If0P8A0W7p0hjljO9D1Pl6Gn4nidt2DtjAIbGAPPxxQQ8NuXt8ugz7ynJH3qT3kJhaLewj3coFOPpSyVjRpHagqI6kYywzgAcU/b67cW8CRJDBIqjCsygnFVSPZEjeW6+APFM50v8A+8B84pc/ktI060ikZVuwfcdeKesoREs0hHPckLnzNEEJklCqM7jjFParb+yz9xjGFGa6210ccIteophBuphdNYRSSMThYw3TzPFP6daGd3GM+H3NaXXbOKz067G0DmOIfQZqeTJT4opiw2nJmVsuz3t9hd3LSMgt4GkyAOcYwPzqsm0juiq943KhunTNfQLdFtuycq5GZ8J8xuH7VRaxGvtTFeiqFB+lTxzuTK5YcYIyLWe3pIRXhtOP+YaflXDfPNTiiDYz511cFRwqcrorWsiBne32pq10qWSPvgDJEOqnp/7xV5PY74LZEQF5XwB50/EqW+nJCVwzXBQgen+9Rm1WjphB3tmcGkxy4CxsjE4wGPX65qB0OQNIuHynX3gP5itdCsTNCMKGN3t+VG7RrHae1tnLORtxUefqqjo8lcbsyMnZ+4itY7iaK5SKT4HOCD9qi2nxRFe5mYkgZ71SuPP5ivoN4UPYCxYgFl3L09DWd11HW10jdxm3UnjGRgVseRy7FnBRVoX0zTLKazvGuL22Vo4sxxuwBkYYzg/Q0tqen2zzxG14URLnB4LZOf0osk+kRw3iTWTTTsxEBSQqI/U+fyqsid0wI8Ajp7lNFO7Fk00lQbUIw0McUMKctudz1IAGBSkloZFUM65HUjx8qYWaYjDKM/6SKHI7r/dUnyziqrQklYudOUkFpB9qgbdVUsT+KeB8qaUyMATCM/OhxhmQsrEtuOUPh96LYqgkCFvCOm5fPJqUccKtlApb50Z1OzyIqHdLIQdwB88ULCok3KSMZGUFm+I1AvGBj3ef8tePJsBXKnzx4UAGJxkAH5HNA1Be8iJxsU/So/hf/Gn2qO0HpgfSonaDj9P6VjVZp9AiWfVYEPTfk/Koa7OJ9WuCDkbiBQNFuhbXBm8VXikZJTJM7E5LMTTKL52B5F5dI1PZgJ3kIf8AvzDn0HNT7T34uwYk/wCpcMx+XQVTWt0bfuyOoBpnSIzf6vbxtyN9RlDfNlozuKgiy1VntbK0tjwMBqW1i3MOj2ly/WdmNXXbKCM6pFEoHuIBkUDt9JHHpul2sfVI80mN24pD5l6ZMwjtuf5URSwXhePOhAc04rqLUR4y2/JNeizyYbt2WWnahDHfaQ059yCQNKfrVdf3jSXkksW4KZTIFz0JoMpBZQOBnrXlwIzJ+HnHrSqCspPLJoYivJoVS47wMxl3qnkQc5NM6/qT3mIpSMoEzt8fcGfzH51VHrXnTrR8qN2xP5EqcRxtUun0+Kz70mBGLBc+JGP1prWdebUYLOAKoFvbJCWPiV4JH2FVO5ccmpKy9cVGfG9HTi5tXIjtGAVGfnUx81rnICnqD4cUrJMWbb5eI8aQsPDew92QDFRZnU/EppIPIFyjOf8AUBXntM4bDkfWP9c1gWPByeoBoPc4ZnXcPMA0FJZWJKhGHnkijLK3imf+6sYko6ks3A65rzClAVkwMeVBknaJwREyxk+8F5x61yygDchXB64NYx5JEWHRc+eP60tJiNsge8eNwIx9qdLZHBJ+XNClaT/p5B8nTisZim9SPxFkB8CFr3vEHG9//E00sgYYbAPkRUtn+QfesAnExEbYPhUYj7wrq6ulHE30NMxrR9iBnXISfCurqjl/rZ04H+RFn2qlZtfnyfh24ql7WzPLdQq5yFiGK6uqOFbiX8Q/xyKFRU/Curq7jzl0Rk6UMHNdXUyEkemhzMUCgeNdXUJfqbF+6ACVt4HnTEZLZz4V1dXIz0iSZ2McnrUUO55htX3ehArq6gYhbkuCG5GamignkeFdXUUBklO0gAVznIJryuoBOUkuB6eFCdRFMNgAD/EPA11dRAFMaOu4qOfACgLCpPDOvyaurqzMKTzyxe6G3DyYZoQnkI4OPQV5XUBWf//Z');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    #r1-container {

        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
    }

    #r1-container h1 {
        font-size: 3rem;
        color: #444;
        text-transform: uppercase;
        text-align: center;
        padding: 1rem 0;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: rgba(255, 255, 255, 0.8);
        /* Transparent white background for the form */

        border-radius: 10px;
    }

    table {
        width: 200px;
        height: 150px;
        border: 1px solid black;
        background: rgba(255, 255, 255, 0.8);
        /* Transparent white background for the table */
        padding: 20px;
        border-radius: 20px;
    }

    table tr td {
        padding: 8px;
    }

    table tr td input {
        font-size: 17px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>

<body>
    <div id="r1-container">
        <h1>Please Fill Up The Form Given Below</h1>
        <form action="r1.php" method="post">
            <h1>BOOK NOW</h1>
            <table>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status" title="status" placeholder="Availble"></td>
                </tr>

                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" title="name" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" title="address" required></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><input type="text" name="state" title="state" required></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" title="city" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" title="email" required></td>
                </tr>
                <tr>
                    <td>Check in Date</td>
                    <td><input type="date" name="cin" title="cindate" value="<?php echo $ci; ?>"> </td>
                    <td>Check out Date</td>
                    <td><input type="date" name="cout" title="coutdate" value="<?php echo $co; ?>"></td>
                </tr>
                <tr>
                    <td>Members</td>
                    <td><input type="text" name="members" title="members" required></td>
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td><input type="text" name="roomtype" title="roomtype" value="<?php echo $rt; ?>"></td>
                </tr>
                <tr>
                    <td>No of Rooms</td>
                    <td><input type="text" name="noofroom" title="No of Room" value="<?php echo $nr; ?>"></td>
                </tr>
                <tr>

                    <td><input class="btn" type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
            <?php


            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $state = $_POST['state'];
                $city = $_POST['city'];
                $email = $_POST['email'];
                $ci = $_POST['cin'];
                $co = $_POST['cout'];
                $members = $_POST['members'];
                $roomtype = $_POST['roomtype'];
                $noofroom = $_POST['noofroom'];

                $qryy = "SELECT * FROM `deluxacroom` WHERE `status`='un book'";
                $run = mysqli_query($sql, $qryy);
                // $rno=$ow['roomno'];
                $row = mysqli_fetch_assoc($run);
                $rno = $row['roomno'];




                $qry = "INSERT INTO `room booking` (`id`, `name`, `address`, `state`, `city`, `email`, `cin`, `cout`, `members`, `roomtype`, `no of rooms`) VALUES (NULL, '$name', '$address', '$state', '$city', '$email', '$ci', '$co', '$members', '$roomtype', '$noofroom');";

                $run = mysqli_query($sql, $qry);



                if ($run == true) {
                    mysqli_query($sql, "UPDATE `deluxacroom` SET `status`='book' WHERE `roomno`='$rno' ");
                    header('location:home.php');
                    ?>
                    <script>
                        alert("room book Successfully");
                    </script>
                    <?php
                } else {

                }
            }
            ?>
        </form>
    </div>
</body>

</html>