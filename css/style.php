<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

*{ margin: 0; padding:0; font-family: 'Muli', sans-serif; box-sizing: border-box; }
		
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}

.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D!important;
    color: #fff!important;
}
.btn-gmail {
    background-color: 	#ea4335!important;
    color: #fff!important;
}

a{ color: white; text-decoration: none; }

header{
    width: 100%;
    height: 100vh;
    background-color: #1a52f9;
    background-image: linear-gradient(19deg, #1a52f9 0%, #B721FF 84%);
    position: relative;
}

header:before{
    content: "";
    width: 520px;
    height: 550px;
    position: absolute;
    left: 0;
    bottom: 0;
    /* background-image: url('images/thapa.png'); */
    background-size: 100% 100%;
}

nav{
    width: 100%;
    height: 15vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: absolute;
}

.logo a{
    font-size: 1.6rem;
    text-transform: uppercase;
    font-weight: bold;
}

.menu ul li{
    list-style: none;
    display: inline-block;
    padding: 0 15px;
}

.menu ul li a {
    text-transform: capitalize;
}

.active, ul li:hover{
    border-top: 2px solid #5dade2;
    border-bottom: 2px solid #5dade2;
}

.contact_btn a{
    background-color: #d465ef;
    padding: 12px 26px;
    font-style: 14px;
    font-weight: 500;
    border:1px solid transparent;
    text-transform: capitalize;
}

.contact_btn a:hover{
    background: linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
}

/*///////// center-content ///////////*/

.center_content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.center_content h1{
    color: #fff;
    font-size: 70px;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 10px;
    /*z-index: 1;*/
}

.center_content h2{
    font-size: 25px;
    font-weight: 400;
    color: #fff;
    text-transform: capitalize;
    /*z-index: 1;*/
}

.center_content h2:before{
    content: "";
    width: 80px;
    height: auto;
    border:2px solid #fff;
    position: absolute;
    left: 40px;
    bottom: 0;
    margin-bottom: 10px;
}

/*////////// font aweosme style ///////////////*/

.social_network{
    width: 100px;
    height: auto;
    position: absolute;
    right: 0;
    top: 30%;
}

.fa_icons{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.fa_icons:nth-child(even){
    margin: 20px 0;
}

.fa_icons:hover{
    background:linear-gradient(to bottom, #d465ef 0%, #615cfd 100%);
}

.grid_sec{
    width: 300px;
    height: 100px;
    position: absolute;
    left: 40%;bottom: 0;
    overflow: hidden;
}


	</style>
</head>
<body>

</body>
</html>