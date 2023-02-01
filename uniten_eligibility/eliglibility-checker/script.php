<script type="text/javascript">
        $('document').ready(function(){
          $('.nextbut').css({"pointer-events": "none"});
        });
         $(document).change(function(){ 
            
         
           $('#field-2d8df455721e442b7b255ff7e5b746ad-0').click(function(){
         
             var thisValue = $(this).val();

             $('.nextbut').css({"pointer-events": "none"});
         
             var addOption = '';
             if(thisValue == 'Course Interested'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }   

             if(thisValue == 'Foundation in Engineering'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option><option class="form-select-option" value="SPM" data-at="form-select-option">SPM</option><option class="form-select-option" value="O Level" data-at="form-select-option">O Level</option><option class="form-select-option" value="IGCSE" data-at="form-select-option">IGCSE</option><option class="form-select-option" value="UEC" data-at="form-select-option">UEC</option><option class="form-select-option" value="Others" data-at="form-select-option">Others</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }
         
             if(thisValue == 'Diploma in Mechanical Engineering' || thisValue =='Diploma in Electrical Engineering'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option><option class="form-select-option" value="SPM" data-at="form-select-option">SPM</option><option class="form-select-option" value="O Level" data-at="form-select-option">O Level</option><option class="form-select-option" value="IGCSE" data-at="form-select-option">IGCSE</option><option class="form-select-option" value="UEC" data-at="form-select-option">UEC</option><option class="form-select-option" value="Vocational Certificate" data-at="form-select-option">Vocational Certificate</option><option class="form-select-option" value="Engineering Certificate" data-at="form-select-option">Engineering Certificate</option><option class="form-select-option" value="Others" data-at="form-select-option">Others</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }   
         
             if(thisValue == 'Bachelor of Mechanical Engineering (Hons)' || thisValue == 'Bachelor of Electrical & Electronics Engineering (Hons)' || thisValue == 'Bachelor of Electrical Power Engineering (Hons)' || thisValue == 'Bachelor of Civil Engineering (Hons)'){
               addOption = addOption + '<option class="hidden" value disabled selected>Qualification</option><option class="form-select-option" value="STPM" data-at="form-select-option">STPM</option><option class="form-select-option" value="A-Level" data-at="form-select-option">A-Level</option><option class="form-select-option" value="Matriculation" data-at="form-select-option">Matriculation</option><option class="form-select-option" value="Foundation" data-at="form-select-option">Foundation</option><option class="form-select-option" value="Diploma" data-at="form-select-option">Diploma</option><option class="form-select-option" value="UEC" data-at="form-select-option">UEC</option><option class="form-select-option" value="IB Diploma" data-at="form-select-option">IB Diploma</option><option class="form-select-option" value="HND (UK) Diploma" data-at="form-select-option">HND (UK) Diploma</option><option class="form-select-option" value="SAME/WACE/AUSMAT" data-at="form-select-option">SAME/WACE/AUSMAT</option><option class="form-select-option" value="Others" data-at="form-select-option">Others</option>';
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html('');
               $('#field-2d8df455721e442b7b255ff7e5b746ad-1').html(addOption);
             }  
         
           });  
         
           $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
            $('.nextbut').css({"pointer-events": ""});
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if(programVal == 'Foundation in Engineering' && courseVal =='SPM'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-english-result"  id="fie-spm-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Additional Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-mathematics-result" id="fie-spm-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Maths</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-additional-maths-result" id="fie-spm-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-physics-result" id="fie-spm-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Chemistry</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-chemistry-result" id="fie-spm-chemistry-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Additional Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-spm-additional-subject-result" id="fie-spm-additional-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true" ></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           });  

          $('#fie-spm-english-result, #fie-spm-mathematics-result, #fie-spm-additional-maths-result, #fie-spm-physics-result, #fie-spm-chemistry-result, #fie-spm-additional-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if(programVal == 'Foundation in Engineering' && courseVal =='SPM'){
         
               var fiespmenglishresult = $('#fie-spm-english-result').val(); 
               var fiespmmathematicsresult = $('#fie-spm-mathematics-result').val(); 
               var fiespmadditionalmathsresult = $('#fie-spm-additional-maths-result').val();
               var fiespmphysicsresult = $('#fie-spm-physics-result').val();
               var fiespmchemistryresult = $('#fie-spm-chemistry-result').val(); 
               var fiespmadditionalsubjectresult = $('#fie-spm-additional-subject-result').val();
               $('#eleigibileResultCount').val('6');         
         
               if((fiespmenglishresult == 'A+' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'A-' || fiespmenglishresult == 'B+' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C+' || fiespmenglishresult == 'C') && (fiespmmathematicsresult == 'A+' ||  fiespmmathematicsresult == 'A' || fiespmmathematicsresult == 'A-' || fiespmmathematicsresult == 'B+' || fiespmmathematicsresult == 'B' || fiespmmathematicsresult == 'C+' || fiespmmathematicsresult == 'C') && (fiespmadditionalmathsresult == 'A+' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'A-' || fiespmadditionalmathsresult == 'B+' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C+' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A+' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'A-' || fiespmphysicsresult == 'B+' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C+' || fiespmphysicsresult == 'C') && (fiespmchemistryresult == 'A+' ||  fiespmchemistryresult == 'A' || fiespmchemistryresult == 'A-' || fiespmchemistryresult == 'B+' || fiespmchemistryresult == 'B' || fiespmchemistryresult == 'C+' || fiespmchemistryresult == 'C' || fiespmchemistryresult == 'D' || fiespmchemistryresult == 'E')  && (fiespmadditionalsubjectresult == 'A+' ||  fiespmadditionalsubjectresult == 'A' || fiespmadditionalsubjectresult == 'A-' || fiespmadditionalsubjectresult == 'B+' || fiespmadditionalsubjectresult == 'B' || fiespmadditionalsubjectresult == 'C+' || fiespmadditionalsubjectresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });
         
           $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if(programVal == 'Foundation in Engineering' && courseVal =='O Level'){

               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-english-result"  id="fie-olevel-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-mathematics-result" id="fie-olevel-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Additional Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-additional-maths-result" id="fie-olevel-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-physics-result" id="fie-olevel-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Chemistry</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-chemistry-result" id="fie-olevel-chemistry-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Additional Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-olevel-additional-subject-result" id="fie-olevel-additional-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           });    

            $('#fie-olevel-english-result, #fie-olevel-mathematics-result, #fie-olevel-additional-maths-result, #fie-olevel-physics-result, #fie-olevel-chemistry-result, #fie-olevel-additional-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if(programVal == 'Foundation in Engineering' && courseVal =='O Level'){ 
              $('#eleigibileResultCount').val('6');
         
               var fiespmenglishresult = $('#fie-olevel-english-result').val(); 
               var fiespmmathematicsresult = $('#fie-olevel-mathematics-result').val(); 
               var fiespmadditionalmathsresult = $('#fie-olevel-additional-maths-result').val();
               var fiespmphysicsresult = $('#fie-olevel-physics-result').val();
               var fiespmchemistryresult = $('#fie-olevel-chemistry-result').val();
               var fiespmadditionalsubjectresult = $('#fie-olevel-additional-subject-result').val();          
         
               if((fiespmenglishresult == 'A*' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C') && (fiespmmathematicsresult == 'A*' ||  fiespmmathematicsresult == 'A' || fiespmmathematicsresult == 'B' || fiespmmathematicsresult == 'C') && (fiespmadditionalmathsresult == 'A*' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A*' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C') && (fiespmchemistryresult == 'A*' ||  fiespmchemistryresult == 'A' || fiespmchemistryresult == 'B' || fiespmchemistryresult == 'C' || fiespmchemistryresult == 'D' || fiespmchemistryresult == 'E') && (fiespmadditionalsubjectresult == 'A*' ||  fiespmadditionalsubjectresult == 'A' || fiespmadditionalsubjectresult == 'B' || fiespmadditionalsubjectresult == 'C+' || fiespmadditionalsubjectresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           }); 

           $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if(programVal == 'Foundation in Engineering' && courseVal =='IGCSE'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-igcse-english-result"  id="fie-igcse-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-igcse-mathematics-result" id="fie-igcse-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Additional Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-igcse-additional-maths-result" id="fie-igcse-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-igcse-physics-result" id="fie-igcse-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Chemistry</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-igcse-chemistry-result" id="fie-igcse-chemistry-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Additional Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-igcse-additional-subject-result" id="fie-igcse-additional-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option class="hidden" value disabled selected>Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true" ></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           });      
           
         
           $('#fie-igcse-english-result, #fie-igcse-mathematics-result, #fie-igcse-additional-maths-result, #fie-igcse-physics-result, #fie-igcse-chemistry-result, #fie-igcse-additional-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if(programVal == 'Foundation in Engineering' && courseVal =='IGCSE'){ 
              $('#eleigibileResultCount').val('5');
         
               var fiespmenglishresult = $('#fie-igcse-english-result').val(); 
               var fiespmmathematicsresult = $('#fie-igcse-mathematics-result').val(); 
               var fiespmadditionalmathsresult = $('#fie-igcse-additional-maths-result').val();
               var fiespmphysicsresult = $('#fie-igcse-physics-result').val();
               var fiespmchemistryresult = $('#fie-igcse-chemistry-result').val(); 
               var fiespmadditionalsubjectresult = $('#fie-igcse-additional-subject-result').val();         
         
               if((fiespmenglishresult == 'A*' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C') && (fiespmmathematicsresult == 'A*' ||  fiespmmathematicsresult == 'A' || fiespmmathematicsresult == 'B' || fiespmmathematicsresult == 'C') && (fiespmadditionalmathsresult == 'A*' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A*' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C') && (fiespmchemistryresult == 'A*' ||  fiespmchemistryresult == 'A' || fiespmchemistryresult == 'B' || fiespmchemistryresult == 'C' || fiespmchemistryresult == 'D' || fiespmchemistryresult == 'E') && (fiespmadditionalsubjectresult == 'A*' ||  fiespmadditionalsubjectresult == 'A' || fiespmadditionalsubjectresult == 'B' || fiespmadditionalsubjectresult == 'C+' || fiespmadditionalsubjectresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

           $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if(programVal == 'Foundation in Engineering' && courseVal =='UEC'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-uec-english-result"  id="fie-uec-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Math/Advanced Math</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-uec-additional-maths-result" id="fie-uec-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Physics/ Any Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-uec-physics-result" id="fie-uec-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Chemistry</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="fie-uec-chemistry-result" id="fie-uec-chemistry-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#fie-uec-english-result, #fie-uec-additional-maths-result, #fie-uec-physics-result, #fie-uec-chemistry-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if(programVal == 'Foundation in Engineering' && courseVal =='UEC'){ 
              $('#eleigibileResultCount').val('4');
         
               var fiespmenglishresult = $('#fie-uec-english-result').val(); 
               //var fiespmmathematicsresult = $('#fie-uec-mathematics-result').val(); 
               var fiespmadditionalmathsresult = $('#fie-uec-additional-maths-result').val();
               var fiespmphysicsresult = $('#fie-uec-physics-result').val();
               var fiespmchemistryresult = $('#fie-uec-chemistry-result').val();          
         
               if((fiespmenglishresult == 'A1' ||  fiespmenglishresult == 'A2' || fiespmenglishresult == 'B3' || fiespmenglishresult == 'B4' || fiespmenglishresult == 'B5'  || fiespmenglishresult == 'B6') && (fiespmadditionalmathsresult == 'A1' ||  fiespmadditionalmathsresult == 'A2' || fiespmadditionalmathsresult == 'B3' || fiespmadditionalmathsresult == 'B4' || fiespmadditionalmathsresult == 'B5'  || fiespmadditionalmathsresult == 'B6') && (fiespmphysicsresult == 'A1' ||  fiespmphysicsresult == 'A2' || fiespmphysicsresult == 'B3' || fiespmphysicsresult == 'B4' || fiespmphysicsresult == 'B5' || fiespmphysicsresult == 'B6') && (fiespmchemistryresult == 'A1' ||  fiespmchemistryresult == 'A2' || fiespmchemistryresult == 'B3' || fiespmchemistryresult == 'B4' || fiespmchemistryresult == 'B5' || fiespmchemistryresult == 'B6' || fiespmchemistryresult == 'C7' || fiespmchemistryresult == 'C8')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='SPM'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-spm-english-result"  id="diploma-spm-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-spm-additional-maths-result" id="diploma-spm-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-spm-physics-result" id="diploma-spm-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Science</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-spm-science-result" id="diploma-spm-science-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Technical Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-spm-technical-subject-result" id="diploma-spm-technical-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#diploma-spm-english-result, #diploma-spm-additional-maths-result, #diploma-spm-physics-result, #diploma-spm-science-result, #diploma-spm-technical-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='SPM'){
              $('#eleigibileResultCount').val('5');
         
               var fiespmenglishresult = $('#diploma-spm-english-result').val(); 
               var fiespmadditionalmathsresult = $('#diploma-spm-additional-maths-result').val();  
               var fiespmphysicsresult = $('#diploma-spm-physics-result').val(); 
               var fiespmscienceresult = $('#diploma-spm-science-result').val(); 
               var fiespmtechnicalsubjectresult = $('#diploma-spm-technical-subject-result').val();       
         
               if((fiespmenglishresult == 'A+' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'A-' || fiespmenglishresult == 'B+' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C+' || fiespmenglishresult == 'C' || fiespmenglishresult == 'D' || fiespmenglishresult == 'E') && (fiespmadditionalmathsresult == 'A+' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'A-' || fiespmadditionalmathsresult == 'B+' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C+' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A+' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'A-' || fiespmphysicsresult == 'B+' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C+' || fiespmphysicsresult == 'C') && (fiespmscienceresult == 'A+' ||  fiespmscienceresult == 'A' || fiespmscienceresult == 'A-' || fiespmscienceresult == 'B+' || fiespmscienceresult == 'B' || fiespmscienceresult == 'C+' || fiespmscienceresult == 'C') && (fiespmtechnicalsubjectresult == 'A+' ||  fiespmtechnicalsubjectresult == 'A' || fiespmtechnicalsubjectresult == 'A-' || fiespmtechnicalsubjectresult == 'B+' || fiespmtechnicalsubjectresult == 'B' || fiespmtechnicalsubjectresult == 'C+' || fiespmtechnicalsubjectresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='O Level'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-olevel-english-result"  id="diploma-olevel-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-olevel-additional-maths-result" id="diploma-olevel-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-olevel-physics-result" id="diploma-olevel-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Science</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-olevel-science-result" id="diploma-olevel-science-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Technical Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-olevel-technical-subject-result" id="diploma-olevel-technical-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#diploma-olevel-english-result, #diploma-olevel-additional-maths-result, #diploma-olevel-physics-result, #diploma-olevel-science-result, #diploma-olevel-technical-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='O Level'){

              $('#eleigibileResultCount').val('5');
         
               var fiespmenglishresult = $('#diploma-olevel-english-result').val(); 
               var fiespmadditionalmathsresult = $('#diploma-olevel-additional-maths-result').val();
               var fiespmphysicsresult = $('#diploma-olevel-physics-result').val(); 
               var fiespmscienceresult = $('#diploma-olevel-science-result').val(); 
               var fiespmtechnicalsubjectresult = $('#diploma-olevel-technical-subject-result').val();       
         
               if((fiespmenglishresult == 'A*' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C' || fiespmenglishresult == 'D' || fiespmenglishresult == 'E') && (fiespmadditionalmathsresult == 'A*' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A*' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C') && (fiespmscienceresult == 'A*' ||  fiespmscienceresult == 'A' || fiespmscienceresult == 'B' || fiespmscienceresult == 'C') && (fiespmtechnicalsubjectresult == 'A*' ||  fiespmtechnicalsubjectresult == 'A' || fiespmtechnicalsubjectresult == 'B' || fiespmtechnicalsubjectresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });


          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='IGCSE'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-igcse-english-result"  id="diploma-igcse-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-igcse-additional-maths-result" id="diploma-igcse-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-igcse-physics-result" id="diploma-igcse-physics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Science</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-igcse-science-result" id="diploma-igcse-science-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label class="l-label">Technical Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-igcse-technical-subject-result" id="diploma-igcse-technical-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="F or G" data-at="form-select-option">F or G</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#diploma-igcse-english-result, #diploma-igcse-additional-maths-result, #diploma-igcse-physics-result, #diploma-igcse-science-result, #diploma-igcse-technical-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='IGCSE'){
              $('#eleigibileResultCount').val('5');
         
               var fiespmenglishresult = $('#diploma-igcse-english-result').val(); 
               var fiespmadditionalmathsresult = $('#diploma-igcse-additional-maths-result').val();   
               var fiespmphysicsresult = $('#diploma-igcse-physics-result').val(); 
               var fiespmscienceresult = $('#diploma-igcse-science-result').val(); 
               var fiespmtechnicalsubjectresult = $('#diploma-igcse-technical-subject-result').val();     
         
               if((fiespmenglishresult == 'A*' ||  fiespmenglishresult == 'A' || fiespmenglishresult == 'B' || fiespmenglishresult == 'C' || fiespmenglishresult == 'D' || fiespmenglishresult == 'E') && (fiespmadditionalmathsresult == 'A*' ||  fiespmadditionalmathsresult == 'A' || fiespmadditionalmathsresult == 'B' || fiespmadditionalmathsresult == 'C') && (fiespmphysicsresult == 'A*' ||  fiespmphysicsresult == 'A' || fiespmphysicsresult == 'B' || fiespmphysicsresult == 'C') && (fiespmscienceresult == 'A*' ||  fiespmscienceresult == 'A' || fiespmscienceresult == 'B' || fiespmscienceresult == 'C') && (fiespmtechnicalsubjectresult == 'A*' ||  fiespmtechnicalsubjectresult == 'A' || fiespmtechnicalsubjectresult == 'B' || fiespmtechnicalsubjectresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='UEC'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-uec-english-result"  id="diploma-uec-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-uec-additional-maths-result" id="diploma-uec-additional-maths-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Science</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-uec-science-result" id="diploma-uec-science-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Additional Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-uec-additional-subject-result" id="diploma-uec-additional-subject-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#diploma-uec-english-result, #diploma-uec-additional-maths-result, #diploma-uec-science-result, #diploma-uec-additional-subject-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='UEC'){
              $('#eleigibileResultCount').val('4');
         
               var fiespmenglishresult = $('#diploma-uec-english-result').val(); 
               var fiespmadditionalmathsresult = $('#diploma-uec-additional-maths-result').val();  
               var fiespmscienceresult = $('#diploma-uec-science-result').val(); 
               var fiespmtechnicalsubjectresult = $('#diploma-uec-additional-subject-result').val();       
         
               if((fiespmenglishresult == 'A1' ||  fiespmenglishresult == 'A2' || fiespmenglishresult == 'B3' || fiespmenglishresult == 'B4' || fiespmenglishresult == 'B5' || fiespmenglishresult == 'B6' || fiespmenglishresult == 'C7' || fiespmenglishresult == 'C8') && (fiespmadditionalmathsresult == 'A1' ||  fiespmadditionalmathsresult == 'A2' || fiespmadditionalmathsresult == 'B3' || fiespmadditionalmathsresult == 'B4' || fiespmadditionalmathsresult == 'B5' || fiespmadditionalmathsresult == 'B6' || fiespmadditionalmathsresult == 'C7' || fiespmadditionalmathsresult == 'C8') && (fiespmscienceresult == 'A1' ||  fiespmscienceresult == 'A2' || fiespmscienceresult == 'B3' || fiespmscienceresult == 'B4' || fiespmscienceresult == 'B5' || fiespmscienceresult == 'B6') && (fiespmtechnicalsubjectresult == 'A1' ||  fiespmtechnicalsubjectresult == 'A2' || fiespmtechnicalsubjectresult == 'B3' || fiespmtechnicalsubjectresult == 'B4' || fiespmtechnicalsubjectresult == 'B5' || fiespmtechnicalsubjectresult == 'B6')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='Vocational Certificate'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">SKM Level</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-vc-kkm-level-result"  id="diploma-vc-kkm-level-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="Level 5" data-at="form-select-option">Level 5</option><option class="form-select-option" value="Level 4" data-at="form-select-option">Level 4</option><option class="form-select-option" value="Level 3" data-at="form-select-option">Level 3</option><option class="form-select-option" value="Level 2" data-at="form-select-option">Level 2</option><option class="form-select-option" value="Level 1" data-at="form-select-option">Level 1</option></select></div><div class="form-block-select"><label class="l-label">GCPA</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-vc-cgpa-result" id="diploma-vc-cgpa-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="4.00" data-at="form-select-option">4.00 - 3.00</option><option class="form-select-option" value="3.00" data-at="form-select-option">2.99 - 2.00</option><option class="form-select-option" value="2.00" data-at="form-select-option">1.99 - 1.00</option><option class="form-select-option" value="1.00" data-at="form-select-option">0.99 - 0.00</option></select></div><div class="form-block-select"><label class="l-label">1 year Working Experience or 1 Semester Enhancement Programme</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-vc-certificate-result" id="diploma-vc-certificate-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="YES (either 1)" data-at="form-select-option">YES (either 1)</option><option class="form-select-option" value="NO" data-at="form-select-option">NO</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#diploma-vc-kkm-level-result, #diploma-vc-cgpa-result, #diploma-vc-certificate-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='Vocational Certificate'){
              $('#eleigibileResultCount').val('3'); 
         
               var fiespmenglishresult = $('#diploma-vc-kkm-level-result').val(); 
               var fiespmadditionalmathsresult = $('#diploma-vc-cgpa-result').val();  
               var fiespmcertificateresult = $('#diploma-vc-certificate-result').val();       
         
               if((fiespmenglishresult == 'Level 3' ||  fiespmenglishresult == 'Level 4' || fiespmenglishresult == 'Level 5') && (fiespmadditionalmathsresult == '5.00' ||  fiespmadditionalmathsresult == '4.00' || fiespmadditionalmathsresult == '3.00' || fiespmadditionalmathsresult == '2.00') && (fiespmcertificateresult == 'YES (either 1)')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='Engineering Certificate'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">SKM Level</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-ec-kkm-level-result"  id="diploma-ec-kkm-level-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="Level 5" data-at="form-select-option">Level 5</option><option class="form-select-option" value="Level 4" data-at="form-select-option">Level 4</option><option class="form-select-option" value="Level 3" data-at="form-select-option">Level 3</option><option class="form-select-option" value="Level 2" data-at="form-select-option">Level 2</option><option class="form-select-option" value="Level 1" data-at="form-select-option">Level 1</option></select></div><div class="form-block-select"><label class="l-label">GCPA</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="diploma-ec-cgpa-result" id="diploma-ec-cgpa-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="4.00" data-at="form-select-option">4.00 - 3.00</option><option class="form-select-option" value="3.00" data-at="form-select-option">2.99 - 2.00</option><option class="form-select-option" value="2.00" data-at="form-select-option">1.99 - 1.00</option><option class="form-select-option" value="1.00" data-at="form-select-option">0.99 - 0.00</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#diploma-ec-kkm-level-result, #diploma-ec-cgpa-result, #diploma-ec-certificate-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Diploma in Mechanical Engineering' || programVal == 'Diploma in Electrical Engineering') && courseVal =='Engineering Certificate'){
              $('#eleigibileResultCount').val('2');
         
               var fiespmenglishresult = $('#diploma-ec-kkm-level-result').val(); 
               var fiespmadditionalmathsresult = $('#diploma-ec-cgpa-result').val();      
         
               if((fiespmenglishresult == 'Level 3' ||  fiespmenglishresult == 'Level 4' || fiespmenglishresult == 'Level 5') && (fiespmadditionalmathsresult == '5.00' ||  fiespmadditionalmathsresult == '4.00' || fiespmadditionalmathsresult == '3.00' || fiespmadditionalmathsresult == '2.00')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });


          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && courseVal =='STPM'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">CGPA</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-stpm-cgpa-result"  id="bsc-stpm-cgpa-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="4.00" data-at="form-select-option">4.00 - 3.00</option><option class="form-select-option" value="3.00" data-at="form-select-option">2.99 - 2.00</option><option class="form-select-option" value="2.00" data-at="form-select-option">1.99 - 1.00</option><option class="form-select-option" value="1.00" data-at="form-select-option">0.99 - 0.00</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-stpm-mathematics-result" id="bsc-stpm-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-stpm-pss-result" id="bsc-stpm-pss-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label class="l-label">SPM English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-stpm-english-result" id="bsc-stpm-english-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A+" data-at="form-select-option">A+</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="A-" data-at="form-select-option">A-</option><option class="form-select-option" value="B+" data-at="form-select-option">B+</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C+" data-at="form-select-option">C+</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option><option class="form-select-option" value="G" data-at="form-select-option">G</option><option class="form-select-option" value="TH" data-at="form-select-option">TH</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-stpm-cgpa-result, #bsc-stpm-mathematics-result, #bsc-stpm-english-result, #bsc-stpm-pss-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && courseVal =='STPM'){
              $('#eleigibileResultCount').val('4');
         
               var bscstpmcgparesult = $('#bsc-stpm-cgpa-result').val(); 
               var bscstpmmathematicsresult = $('#bsc-stpm-mathematics-result').val();  
               var bscstpmpssresult = $('#bsc-stpm-pss-result').val(); 
               var bscstpmenglishresult = $('#bsc-stpm-english-result').val();    
         
               if((bscstpmcgparesult == '2.00' ||  bscstpmcgparesult == '3.00' || bscstpmcgparesult == '4.00') && (bscstpmmathematicsresult == 'A+' ||  bscstpmmathematicsresult == 'A' ||  bscstpmmathematicsresult == 'A-' || bscstpmmathematicsresult == 'B+' || bscstpmmathematicsresult == 'B' || bscstpmmathematicsresult == 'C+' || bscstpmmathematicsresult == 'C' || bscstpmmathematicsresult == 'D' || bscstpmmathematicsresult == 'E') && (bscstpmcgparesult == '2.00' ||  bscstpmcgparesult == '3.00' || bscstpmcgparesult == '4.00') && (bscstpmpssresult == 'A+' ||  bscstpmpssresult == 'A' ||  bscstpmpssresult == 'A-' || bscstpmpssresult == 'B+' || bscstpmpssresult == 'B' || bscstpmpssresult == 'C+' || bscstpmpssresult == 'C' || bscstpmpssresult == 'D' || bscstpmpssresult == 'E')  && (bscstpmenglishresult == 'A+' ||  bscstpmenglishresult == 'A' ||  bscstpmenglishresult == 'A-' || bscstpmenglishresult == 'B+' || bscstpmenglishresult == 'B' || bscstpmenglishresult == 'C+' || bscstpmenglishresult == 'C' || bscstpmenglishresult == 'D' || bscstpmenglishresult == 'E') ){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && courseVal =='A-Level'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">Graduation Level</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-alevel-cgpa-result"  id="bsc-alevel-cgpa-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="Pass" data-at="form-select-option">Pass</option><option class="form-select-option" value="Not qualified" data-at="form-select-option">Not qualified</option></select></div><div class="form-block-select"><label class="l-label">Mathematics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-alevel-mathematics-result" id="bsc-alevel-mathematics-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label class="l-label">Physical Science Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-alevel-pss-result" id="bsc-alevel-pss-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A*" data-at="form-select-option">A*</option><option class="form-select-option" value="A" data-at="form-select-option">A</option><option class="form-select-option" value="B" data-at="form-select-option">B</option><option class="form-select-option" value="C" data-at="form-select-option">C</option><option class="form-select-option" value="D" data-at="form-select-option">D</option><option class="form-select-option" value="E" data-at="form-select-option">E</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-alevel-cgpa-result, #bsc-alevel-mathematics-result, #bsc-alevel-pss-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && courseVal =='A-Level'){

              $('#eleigibileResultCount').val('3');
         
               var bscstpmcgparesult = $('#bsc-alevel-cgpa-result').val(); 
               var bscstpmmathematicsresult = $('#bsc-alevel-mathematics-result').val();  
               var bscstpmpssresult = $('#bsc-alevel-pss-result').val(); 
               // var bscstpmenglishresult = $('#bsc-alevel-english-result').val();    
         
               if((bscstpmcgparesult == 'Pass') && (bscstpmmathematicsresult == 'A*' ||  bscstpmmathematicsresult == 'A' || bscstpmmathematicsresult == 'B' || bscstpmmathematicsresult == 'C'  || bscstpmmathematicsresult == 'D' || bscstpmmathematicsresult == 'E') && (bscstpmpssresult == 'A*' ||  bscstpmpssresult == 'A' || bscstpmpssresult == 'B' || bscstpmpssresult == 'C')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && courseVal =='Matriculation'){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">CGPA</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-matric-cgpa-result" id="bsc-matric-cgpa-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="4.00" data-at="form-select-option">4.00 - 3.00</option><option class="form-select-option" value="3.00" data-at="form-select-option">2.99 - 2.00</option><option class="form-select-option" value="2.00" data-at="form-select-option">1.99 - 1.00</option><option class="form-select-option" value="1.00" data-at="form-select-option">0.99 - 0.00</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-matric-science-result, #bsc-matric-bio-result, #bsc-matric-cgpa-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && courseVal =='Matriculation'){
              $('#eleigibileResultCount').val('1');
         
               var bscstpmcgparesult = $('#bsc-matric-cgpa-result').val(); 
               var bscstpmmathematicsresult = $('#bsc-matric-science-result').val();  
               var bscstpmpssresult = $('#bsc-matric-bio-result').val(); 
               // var bscstpmenglishresult = $('#bsc-matric-english-result').val();    
         
               if((bscstpmcgparesult == '4.00' || bscstpmcgparesult == '3.00' || bscstpmcgparesult == '2.00') && (bscstpmmathematicsresult == '4.00' ||  bscstpmmathematicsresult == '3.00' || bscstpmmathematicsresult == '2.00') && (bscstpmpssresult == '4.00' ||  bscstpmpssresult == '3.00' || bscstpmpssresult == '2.00')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='Foundation' || courseVal =='Diploma' || courseVal == 'HND (UK) Diploma')){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">CGPA</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-foun-dip-cgpa-result" id="bsc-foun-dip-cgpa-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="4.00" data-at="form-select-option">4.00 - 3.00</option><option class="form-select-option" value="3.00" data-at="form-select-option">2.99 - 2.00</option><option class="form-select-option" value="2.00" data-at="form-select-option">1.99 - 1.00</option><option class="form-select-option" value="1.00" data-at="form-select-option">0.99 - 0.00</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-foun-dip-cgpa-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='Foundation' || courseVal =='Diploma' || courseVal == 'HND (UK) Diploma')){
              $('#eleigibileResultCount').val('1');
         
               var bscstpmcgparesult = $('#bsc-foun-dip-cgpa-result').val(); 
               // var bscstpmmathematicsresult = $('#bsc-matric-science-result').val();  
               // var bscstpmpssresult = $('#bsc-matric-bio-result').val(); 
               // var bscstpmenglishresult = $('#bsc-matric-english-result').val();    
         
               if((bscstpmcgparesult == '4.00' || bscstpmcgparesult == '3.00' || bscstpmcgparesult == '2.00')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='UEC')){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">Advanced Mathematics 1</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-uec-admath-result" id="bsc-uec-admath-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Advanced Mathematics 2</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-uec-as1-result" id="bsc-uec-as1-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Physics</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-uec-as2-result" id="bsc-uec-as2-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">English</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-uec-as3-result" id="bsc-uec-as3-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label class="l-label">Science Physical Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-uec-as4-result" id="bsc-uec-as4-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="A1" data-at="form-select-option">A1</option><option class="form-select-option" value="A2" data-at="form-select-option">A2</option><option class="form-select-option" value="B3" data-at="form-select-option">B3</option><option class="form-select-option" value="B4" data-at="form-select-option">B4</option><option class="form-select-option" value="B5" data-at="form-select-option">B5</option><option class="form-select-option" value="B6" data-at="form-select-option">B6</option><option class="form-select-option" value="C7" data-at="form-select-option">C7</option><option class="form-select-option" value="C8" data-at="form-select-option">C8</option><option class="form-select-option" value="P9" data-at="form-select-option">P9</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-uec-admath-result, #bsc-uec-as1-result, #bsc-uec-as2-result, #bsc-uec-as3-result, #bsc-uec-as4-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='UEC')){
              $('#eleigibileResultCount').val('5');
         
               var bscuecadmathresult = $('#bsc-uec-admath-result').val(); 
               var bscuecas1result = $('#bsc-uec-as1-result').val();  
               var bscuecas2result = $('#bsc-uec-as2-result').val(); 
               var bscuecas3result = $('#bsc-uec-as3-result').val();  
               var bscuecas4result = $('#bsc-uec-as4-result').val();  
         
               if((bscuecadmathresult == 'A1' || bscuecadmathresult == 'A2' || bscuecadmathresult == 'B3' || bscuecadmathresult == 'B4' || bscuecadmathresult == 'B5' || bscuecadmathresult == 'B6') && (bscuecas1result == 'A1' || bscuecas1result == 'A2' || bscuecas1result == 'B3' || bscuecas1result == 'B4' || bscuecas1result == 'B5' || bscuecas1result == 'B6') && (bscuecas2result == 'A1' || bscuecas2result == 'A2' || bscuecas2result == 'B3' || bscuecas2result == 'B4' || bscuecas2result == 'B5' || bscuecas2result == 'B6') && (bscuecas3result == 'A1' || bscuecas3result == 'A2' || bscuecas3result == 'B3' || bscuecas3result == 'B4' || bscuecas3result == 'B5' || bscuecas3result == 'B6') && (bscuecas4result == 'A1' || bscuecas4result == 'A2' || bscuecas4result == 'B3' || bscuecas4result == 'B4' || bscuecas4result == 'B5' || bscuecas4result == 'B6')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='IB Diploma')){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">Math</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-ibd-admath-result" id="bsc-ibd-admath-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="1" data-at="form-select-option">1</option><option class="form-select-option" value="2" data-at="form-select-option">2</option><option class="form-select-option" value="3" data-at="form-select-option">3</option><option class="form-select-option" value="4" data-at="form-select-option">4</option><option class="form-select-option" value="5" data-at="form-select-option">5</option><option class="form-select-option" value="6" data-at="form-select-option">6</option><option class="form-select-option" value="7" data-at="form-select-option">7</option></select></div><div class="form-block-select"><label class="l-label">Science / Another Subject 1</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-ibd-as1-result" id="bsc-ibd-as1-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="1" data-at="form-select-option">1</option><option class="form-select-option" value="2" data-at="form-select-option">2</option><option class="form-select-option" value="3" data-at="form-select-option">3</option><option class="form-select-option" value="4" data-at="form-select-option">4</option><option class="form-select-option" value="5" data-at="form-select-option">5</option><option class="form-select-option" value="6" data-at="form-select-option">6</option><option class="form-select-option" value="7" data-at="form-select-option">7</option></select></div><div class="form-block-select"><label class="l-label">Science / Another Subject 2</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-ibd-as2-result" id="bsc-ibd-as2-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="1" data-at="form-select-option">1</option><option class="form-select-option" value="2" data-at="form-select-option">2</option><option class="form-select-option" value="3" data-at="form-select-option">3</option><option class="form-select-option" value="4" data-at="form-select-option">4</option><option class="form-select-option" value="5" data-at="form-select-option">5</option><option class="form-select-option" value="6" data-at="form-select-option">6</option><option class="form-select-option" value="7" data-at="form-select-option">7</option></select></div><div class="form-block-select"><label class="l-label">Science / Another Subject 3</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-ibd-as3-result" id="bsc-ibd-as3-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="1" data-at="form-select-option">1</option><option class="form-select-option" value="2" data-at="form-select-option">2</option><option class="form-select-option" value="3" data-at="form-select-option">3</option><option class="form-select-option" value="4" data-at="form-select-option">4</option><option class="form-select-option" value="5" data-at="form-select-option">5</option><option class="form-select-option" value="6" data-at="form-select-option">6</option><option class="form-select-option" value="7" data-at="form-select-option">7</option></select></div><div class="form-block-select"><label class="l-label">Science / Another Subject 4</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-ibd-as4-result" id="bsc-ibd-as4-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="1" data-at="form-select-option">1</option><option class="form-select-option" value="2" data-at="form-select-option">2</option><option class="form-select-option" value="3" data-at="form-select-option">3</option><option class="form-select-option" value="4" data-at="form-select-option">4</option><option class="form-select-option" value="5" data-at="form-select-option">5</option><option class="form-select-option" value="6" data-at="form-select-option">6</option><option class="form-select-option" value="7" data-at="form-select-option">7</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-ibd-admath-result, #bsc-ibd-as1-result, #bsc-ibd-as2-result, #bsc-ibd-as3-result, #bsc-ibd-as4-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             $('#eleigibileResultCount').val('5');
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='IB Diploma')){
         
               var bscuecadmathresult = parseInt($('#bsc-ibd-admath-result').val()); 
               var bscuecas1result = parseInt($('#bsc-ibd-as1-result').val());  
               var bscuecas2result = parseInt($('#bsc-ibd-as2-result').val()); 
               var bscuecas3result = parseInt($('#bsc-ibd-as3-result').val());  
               var bscuecas4result = parseInt($('#bsc-ibd-as4-result').val()); 
              var total = bscuecadmathresult + bscuecas1result + bscuecas2result + bscuecas3result + bscuecas4result;
         
               if(total >'23'){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='SAME/WACE/AUSMAT')){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">Math</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-swa-math-result" id="bsc-swa-math-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="100" data-at="form-select-option">100%</option><option class="form-select-option" value="95" data-at="form-select-option">95%</option><option class="form-select-option" value="90" data-at="form-select-option">90%</option><option class="form-select-option" value="85" data-at="form-select-option">85%</option><option class="form-select-option" value="80" data-at="form-select-option">80%</option><option class="form-select-option" value="75" data-at="form-select-option">75%</option><option class="form-select-option" value="70" data-at="form-select-option">70%</option><option class="form-select-option" value="65" data-at="form-select-option">65%</option><option class="form-select-option" value="60" data-at="form-select-option">60%</option><option class="form-select-option" value="55" data-at="form-select-option">55%</option><option class="form-select-option" value="50" data-at="form-select-option">50%</option><option class="form-select-option" value="45" data-at="form-select-option">45%</option><option class="form-select-option" value="40" data-at="form-select-option">40%</option><option class="form-select-option" value="35" data-at="form-select-option">35%</option><option class="form-select-option" value="30" data-at="form-select-option">30%</option><option class="form-select-option" value="25" data-at="form-select-option">25%</option><option class="form-select-option" value="20" data-at="form-select-option">20%</option><option class="form-select-option" value="15" data-at="form-select-option">15%</option><option class="form-select-option" value="10" data-at="form-select-option">10%</option><option class="form-select-option" value="5" data-at="form-select-option">5%</option></select></div><div class="form-block-select"><label class="l-label">Physical Science Subject</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-swa-pss-result" id="bsc-swa-pss-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="100" data-at="form-select-option">100%</option><option class="form-select-option" value="95" data-at="form-select-option">95%</option><option class="form-select-option" value="90" data-at="form-select-option">90%</option><option class="form-select-option" value="85" data-at="form-select-option">85%</option><option class="form-select-option" value="80" data-at="form-select-option">80%</option><option class="form-select-option" value="75" data-at="form-select-option">75%</option><option class="form-select-option" value="70" data-at="form-select-option">70%</option><option class="form-select-option" value="65" data-at="form-select-option">65%</option><option class="form-select-option" value="60" data-at="form-select-option">60%</option><option class="form-select-option" value="55" data-at="form-select-option">55%</option><option class="form-select-option" value="50" data-at="form-select-option">50%</option><option class="form-select-option" value="45" data-at="form-select-option">45%</option><option class="form-select-option" value="40" data-at="form-select-option">40%</option><option class="form-select-option" value="35" data-at="form-select-option">35%</option><option class="form-select-option" value="30" data-at="form-select-option">30%</option><option class="form-select-option" value="25" data-at="form-select-option">25%</option><option class="form-select-option" value="20" data-at="form-select-option">20%</option><option class="form-select-option" value="15" data-at="form-select-option">15%</option><option class="form-select-option" value="10" data-at="form-select-option">10%</option><option class="form-select-option" value="5" data-at="form-select-option">5%</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-swa-math-result, #bsc-swa-pss-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='SAME/WACE/AUSMAT')){
              $('#eleigibileResultCount').val('2');
         
               //var bscuecadmathresult = parseInt($('#bsc-swa-atar-result').val()); 
               var bscuecas1result = parseInt($('#bsc-swa-math-result').val());  
               var bscuecas2result = parseInt($('#bsc-swa-pss-result').val()); 
         
               if(bscuecas1result > '54' && bscuecas2result > '54'){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });

          $('#field-2d8df455721e442b7b255ff7e5b746ad-1').change(function(){ 
         
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $(this).val();
         
             addSubject = '';
             if((courseVal =='Others')){
         
               addSubject = addSubject + '<div class="form-block-select"><label class="l-label">Overseas Preparatory Programme</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-other-overseas-preparatory-programme-result" id="bsc-other-overseas-preparatory-programme-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="Pass" data-at="form-select-option">Pass</option><option class="form-select-option" value="Fail" data-at="form-select-option">Fail</option></select></div><div class="form-block-select"><label class="l-label">American Degree Transfer Programme</label><select class="form-input form-select required form-label-inside resultfiels" data-at="form-select" name="bsc-other-american-degree-transfer-programme-result" id="bsc-other-american-degree-transfer-programme-result" data-describedby="form-validation-error-box-element-2585" title="Result" required aria-required="true" style="width: 40%; float: left; margin-left: 15px;"><option value="">Result</option><option class="form-select-option" value="4.00" data-at="form-select-option">4.00 - 3.00</option><option class="form-select-option" value="3.00" data-at="form-select-option">2.99 - 2.00</option><option class="form-select-option" value="2.00" data-at="form-select-option">1.99 - 1.00</option><option class="form-select-option" value="1.00" data-at="form-select-option">0.99 - 0.00</option></select></div><div class="form-block-select"><label>Type of documents that can be uploaded are</label><input class="form-input form-input-text required" data-at="form-text" type="file" name="fileUpload" data-describedby="form-validation-error-box-element-2585" value="Chemistry" title="Chemistry" placeholder="Chemistry" data-label-inside="Chemistry" required aria-required="true"></div>';
               
         
               $('#wizard-p-1').html('');
               $('#wizard-p-1').html(addSubject);
         
             }
         
           }); 

          $('#bsc-other-overseas-preparatory-programme-result, #bsc-other-american-degree-transfer-programme-result').change(function(){
             var programVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-0').val();
             var courseVal = $('#field-2d8df455721e442b7b255ff7e5b746ad-1').val();
             
             if((programVal == 'Bachelor of Mechanical Engineering (Hons)' || programVal == 'Bachelor of Electrical & Electronics Engineering (Hons)' || programVal == 'Bachelor of Electrical Power Engineering (Hons)' || programVal == 'Bachelor of Civil Engineering (Hons)') && (courseVal =='Others')){
              $('#eleigibileResultCount').val('2');
         
               //var bscuecadmathresult = parseInt($('#bsc-swa-atar-result').val()); 
               var bscuecas1result = $('#bsc-other-overseas-preparatory-programme-result').val();  
               var bscuecas2result = $('#bsc-other-american-degree-transfer-programme-result').val(); 
         
               if(bscuecas1result == 'Pass' && (bscuecas2result == '4.00' || bscuecas2result == '3.00')){
         
                 $('#eleigibileResult').val('Eligible');            
               }else{
                 $('#eleigibileResult').val('Not Eligible');
               }
         
             }
           });
         
          
          
         
         });
         
         
         
      </script>