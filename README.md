<p><span style="font-size:24px"><strong>b2broker - Test task: Financial transactions system</strong><br />
Created by <strong><span style="background-color:#e67e22">Kanagaraj Chinnadurai</span></strong></span></p>

<p><br />
<span style="font-size:24px"><strong>Task Question:</strong><br />
<span style="background-color:#3498db">Implement a set of classes for managing the financial operations of an account.</span><br />
<span style="background-color:#3498db">There are three types of transactions: deposits, withdrawals and transfer from account to account.</span><br />
<span style="background-color:#3498db">The transaction contains a comment, an amount, and a due date.</span><br />
<span style="background-color:#3498db">&nbsp;</span><br />
<span style="background-color:#3498db">Required methods:</span><br />
<span style="background-color:#3498db">&middot; &nbsp; &nbsp; &nbsp;get all accounts in the system.</span><br />
<span style="background-color:#3498db">&middot; &nbsp; &nbsp; &nbsp;get the balance of a specific account</span><br />
<span style="background-color:#3498db">&middot; &nbsp; &nbsp; &nbsp;perform an operation</span><br />
<span style="background-color:#3498db">&middot; &nbsp; &nbsp; &nbsp;get all account transactions sorted by comment in alphabetical order.</span><br />
<span style="background-color:#3498db">&middot; &nbsp; &nbsp; &nbsp;get all account transactions sorted by date.</span></span></p>

<p>&nbsp;</p>

<p><br />
<span style="font-size:24px">I Just tried to create the financial operation of account in PHP OOPS with SOLID, GRASP principles,</span></p>

<p><span style="font-size:24px">Code checked passed by phpstan, phpcs analyzers.</span></p>

<p><span style="font-size:24px">I would greatly appreciate some feedback concerning OOP and PHP best practices, clean code, and overall design.&nbsp;</span></p>

<p><span style="font-size:24px">There is no MVC pattern and UI Interface,</span></p>

<p><span style="font-size:24px">Please check the Simple business logic code,</span></p>

<p><span style="font-size:24px"><strong>Account class:</strong></span></p>

<ul>
	<li><span style="font-size:24px">It stores an instance of Client, amount of money and transaction history.&nbsp;</span></li>
	<li><span style="font-size:24px">Using an instance of that class,&nbsp;</span>
	<ul>
		<li><span style="font-size:24px">a client can deposit money to an account,&nbsp;</span></li>
		<li><span style="font-size:24px">withdraw money and make a transfer to another account.&nbsp;</span></li>
	</ul>
	</li>
</ul>

<p><span style="font-size:24px"><strong>AccountTransaction class</strong> and <strong>TransferDetails class</strong></span></p>

<ul>
	<li><span style="font-size:24px">Transactions handled by these classes.</span></li>
	<li><span style="font-size:24px">AccountTxn will have a list transaction for a specific account.</span></li>
	<li><span style="font-size:24px">TransferDetails will have all the transaction details for all of the accounts.</span></li>
	<li><span style="font-size:24px">Every instance stores details of an operation made by an account.</span></li>
</ul>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p style="margin-left:120px"><img alt="Data Flow Diagram with Examples &amp; Tips" src="https://www.modernanalyst.com/Portals/0/Public%20Uploads/dataflowdiagm_open_account.png" /></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:13.999999999999998pt"><span style="font-family:Arial"><span style="color:#000000"><strong>Code Checkers</strong></span></span></span><span style="font-size:18pt"><span style="font-family:Arial"><span style="color:#000000"> </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">(</span></span></span><span style="font-size:13.999999999999998pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>phpstan, phpcs analyzers</strong></span></span></span><span style="font-size:18pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>)</strong></span></span></span></p>

<ul>
	<li style="list-style-type:disc"><span style="font-size:18pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Phpstan Installation</strong></span></span></span></li>
</ul>

<p><span style="font-size:10pt"><span style="font-family:'Courier New'"><span style="color:#9a050f"><span style="background-color:#ffffff"><strong>composer</strong></span></span></span></span><span style="font-size:10pt"><span style="font-family:'Courier New'"><span style="color:#393a34"><span style="background-color:#ffffff"> require </span></span></span></span><span style="font-size:10pt"><span style="font-family:'Courier New'"><span style="color:#36acaa"><span style="background-color:#ffffff">--dev</span></span></span></span><span style="font-size:10pt"><span style="font-family:'Courier New'"><span style="color:#393a34"><span style="background-color:#ffffff"> phpstan/phpstan</span></span></span></span></p>

<p>&nbsp;</p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><img src="https://lh4.googleusercontent.com/S0ZgVCfMdHbk9wByJtvwdne4AV_jkrF8X_AMNXAHCNo7qgfeZ9lIQPTjHH1o9BOZWIdcPYuS_XN6LZ8f9WR-gBRSMGRRaASkj-_kQIklaVZ6WzQOTQp4dpVRRUCWKEBppFcO0z58QqpN75w-Gcvjuj6jdXdyYfjMOR3zfWCbVhpWsvqaYxFxLMTbWH_PMw" style="height:190px; width:506px" /></span></span></span></p>

<p>&nbsp;</p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><strong>Run the code in phpstan</strong></span></span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">&nbsp; &nbsp; <strong>&nbsp;</strong>vendor/bin/phpstan analyse src</span></span></span></p>

<p style="margin-left:120px"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><img src="https://lh5.googleusercontent.com/Jvd1nLfyUJFFDYW7t2opRg-KuPKEYtGkZTRhgLEBR1b6OPMFKXlBQwQ6NusVBcda6vAWD7MynfrT9yu0wSsusuqOciA1W9PjjmaX_6ASQK4Z6GcBOvpBAu7tBBTcElCkfNJ5Kcsv9DGo-VF6okvyFlGsa4Una_yXFIA39cnbKWnxnD77aVEDx_3KxMbFWA" style="height:131px; width:624px" /></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Run the code to save details in the text file</strong></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; vendor/bin/phpstan analyse src &gt; result.txt</span></span></span></p>

<p>&nbsp;</p>

<p style="margin-left:120px"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><img src="https://lh3.googleusercontent.com/5-HM1Sgc2rjaKWe_kCToVetNsSSN1orhvU6SPIojctYe5UYIhuOn9qEBK-eBFQsKgUq7fEaSgx8XUfjqGQzmuo_M_4gfHznGoW-qm-tW2a9aqbwmK4s_7GaBwNv9xFVpMqIV54LaeQp47BQ2LLYCRT8biE91Rh5JSxmLuWxuS_EbxE4jb-VcS-42v6As_w" style="height:63px; width:624px" /></span></span></span></p>

<p><br />
<br />
<br />
&nbsp;</p>

<ul>
	<li style="list-style-type:disc"><span style="font-size:13.999999999999998pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Phpcs </strong></span></span></span><span style="font-size:18pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Installation</strong></span></span></span></li>
</ul>

<p><span style="font-size:10pt"><span style="font-family:'Courier New'"><span style="color:#24292f"><strong>composer </strong></span></span></span><span style="font-size:10pt"><span style="font-family:'Courier New'"><span style="color:#24292f">global require &quot;squizlabs/php_codesniffer=*&quot;</span></span></span></p>

<p><span style="font-size:12pt"><span style="font-family:'Courier New'"><span style="color:#444444"><span style="background-color:#eeeeee">phpcs -i</span></span></span></span></p>

<p style="margin-left:48px"><span style="font-size:12pt"><span style="font-family:'Courier New'"><span style="color:#444444"><span style="background-color:#eeeeee"><img src="https://lh4.googleusercontent.com/fM648o2mNcvcTVcY7L1LcSV0FZSKmw_T2zfLtlafMMjCjzfMeLau6E75qciVk6cu1ZpUSjxOyPhYdwZv1zXqxsfpevrjnrgIJZXpAASWHmsXvnI_FCDsb4Hcym_zL6HCWgH1gW6rl866zqNQ7mK0reXYmliNLOkUOGWVwUDujRWMaUKopgWACu6_hjanXQ" style="height:356px; width:546px" /></span></span></span></span></p>

<p><br />
&nbsp;</p>

<p><span style="font-size:18pt"><span style="font-family:Arial"><span style="color:#000000"><strong>RUN the code in php</strong></span></span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><img src="https://lh5.googleusercontent.com/2Wcm9vHGcacu8ujg9nw4TFwEbn6QwNTnzy6ojASA-r6lGfik1ZBpPq6ffOILtyugy5rLj3JWYHi8BwCWn9iv_GPbCZzheY2uildUh1cWo8I89Jj5iP9PwKCOhPa5A_L2xT2S8v1HkQ1WYQ9NRV7ctKkIUiISaV3Ccc6ZeFIepC99_yzjC_8Q6wyynJxmwQ" style="height:259px; width:624px" /></span></span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Note:&nbsp;</span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Without i have given few sample date to get display the sample data,</span></span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Thank you</span></span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
