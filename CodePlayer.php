<html>
    <head>
        <title>CODE</title>
    </head>
    <link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <style type="text/css">
    #layout{
        background-color: #0B0B3B;
        width:1360px;
        height:90px;
        
    }
    body{
        margin: 0px;
    }
    .lay_1{
        color: aliceblue;
        position: absolute;
        left:20px;
        font-size: 200%;
        font-family: 'Kulim Park', sans-serif;

    }
    .lay_2{
        position: relative;
        left: 500px;
        bottom: -35px ;
        width:100px;
        height:30px;
        border: 1px;
        border-radius: 5px;
    }
    
    .q1{
        
        width:300px;
        height:500px;
        float: left;
        display: none;
        
        
    }
    #output{
        width: 444px;
        height: 500px;
        display: none;
        float: left;
        
    }
    .bar{
        background-color: #CECEF6;
        width:1360px;
        height:34px;
        float:left;
        position: fixed;
        bottom: 1px;;
        
    }
    .bar1{
        position: absolute;
        left:120px;
        bottom: -10px;
        
        font-family: 'Roboto Mono', monospace;
    }
    .bar2{
        position: absolute;
        left:440px;
        bottom: -10px;
        font-family: 'Roboto Mono', monospace;
    }
    .bar3{
        position: absolute;
        left:740px;
        bottom: -10px;
        font-family: 'Roboto Mono', monospace;
    }
    .bar4{
        position: absolute;
        left:1080px;
        bottom: -10px;
        font-family: 'Roboto Mono', monospace;
    }
    
    
    
    
    
    
    </style>
    <body>
        <div id="layout">
            <p class="lay_1">CODE EDITOR</p>
            <button class="lay_2" id="button_1">HTML</button>
            <button class="lay_2" id="button_2">CSS</button>
            <button class="lay_2" id="button_3">JAVASCRIPT</button>
            <button class="lay_2" id="button_4">OUTPUT</button>
        </div>
        <div class="bar">
            <p class="bar1">HTML</p>
            <p class="bar2">CSS</p>
            <p class="bar3">JAVASCRIPT</p>
            <p class="bar4">OUTPUT</p>

        </div>
        <div>
            <textarea type="text" class="q1" id="q11" style="resize: none;background-color: #6CA0D1" ">
            </textarea>
            
            

        </div>
        <div>
            <textarea type="text" class="q1" id="q12" style="resize: none; background-color: #B2DBED"></textarea>

        </div>
        <div>
            <textarea type="text" class="q1" id="q13" style="resize: none;background-color: #D3E7F3"></textarea>

        </div>
        <div>
            <iframe id="output" style="background-color: #F6FCFC;"></iframe>
        </div>
        

        <script type="text/javascript">
        document.getElementById("button_1").onclick=function(){
            
            document.getElementById("q11").style.display="block";
        }
        document.getElementById("button_2").onclick=function(){
            
            document.getElementById("q12").style.display="block";
        }
        document.getElementById("button_3").onclick=function(){
            
            document.getElementById("q13").style.display="block";
            
                
        }
        document.getElementById("button_4").onclick=function(){
            
            document.getElementById("output").style.display="block";
            
                
        }
        function updateoutput(){
            $("iframe").contents().find("html").html("<html><head></head><style type='text/css'>" +
            $("#q12").val() +"</style><body>"+$("#q11").val()+"</body></html>");

            document.getElementById("output").contentWindow.eval($("#q13").val());
            

        }
        $("textarea").on('change keyup paste', function(){
            updateoutput();
            
        });
        
        
        
        
        
        
        </script>
        


    </body>
</html>