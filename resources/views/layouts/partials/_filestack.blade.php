<?php

var client = filestack.init("AWfpMt9vqSzalYlBfIu2tz");
        document.getElementById("updateIcon").addEventListener("click", updateIcon);
        function updateIcon(){
        	console.log("Updating Icon...");
        	client.pick({
        		accept: "image/*",
        		maxFiles: 1,
        		fromSources: ['local_file_system', 'facebook', 'googledrive', 'webcam'],
        		imageMax: [500,500],
        	}).then(function(result){
        		console.log(JSON.stringify(result));
        		var handle = result.filesUploaded[0].handle;
        		console.log(handle);

        		$('input[name=image]').val(handle);

                $("#filestackConfirm").after(function(){
                    return "<p>Image successfully uploaded!</p>";
                });

                $("#editIcon").attr('src', "https://process.filestackapi.com/resize=w:300,h:300/circle/" + handle);

        	});
        }