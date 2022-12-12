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

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Uploaded my files into Github</span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000"><strong>Github Link: </strong></span></span></span><a href="https://github.com/kanait84/Financial-transactions-system.git" style="text-decoration:none"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#1155cc"><u>https://github.com/kanait84/Financial-transactions-system.git</u></span></span></span></a></p>

<p><a href="https://github.com/kanait84/Financial-transactions-system/blob/main/src/accounts.php" style="text-decoration:none"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#1155cc"><u>https://github.com/kanait84/Financial-transactions-system/blob/main/src/accounts.php</u></span></span></span></a></p>

<p>&nbsp;</p>

<p><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124"><strong>SOLID Principles</strong></span></span></span></p>

<ul>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">S: Single-responsibility principle.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">O: Open-closed principle.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">L: Liskov substitution principle.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">I: Interface segregation principle.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">D: Dependency Inversion Principle.</span></span></span></li>
</ul>

<p><br />
<br />
&nbsp;</p>

<p><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124"><strong>These were the 9 GRASP principles:</strong></span></span></span></p>

<ul>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Information expert.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Creator.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Low coupling.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Protected variations.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Indirection.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Polymorphism.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">High cohesion.</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Pure fabrication</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:Arial"><span style="color:#202124">Controller</span></span></span></li>
</ul>

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

<p><span style="font-size:18pt"><span style="font-family:Arial"><span style="color:#000000"><strong>RUN the code in php</strong></span></span></span><br />
&nbsp;</p>

<table>
	<tbody>
		<tr>
			<td>class <strong>Accounts </strong>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public $balance = 0;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $name=&#39;Bob&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $date;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>protected $accounts = [];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $client;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $numMoney = 0;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $debt;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $data;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $account_name;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $account_number;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $acc_type=&#39;Savings&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $acc_balance= 0;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $customerId;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $bank_name=&#39;ABBC Bank&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $country=&#39;UAE&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function __construct($client, $name)</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Initialize the constructor data</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;client = $client;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;name = $name;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>// get all accounts in the system</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function getAllAccounts()</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Fetch the relevant data and get the array format result</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;accounts = [</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;account_name&#39; =&gt; &#39;Ram&#39;, &#39;account_number&#39; =&gt; &#39;45678765&#39;, &#39;account_type&#39; =&gt; $this-&gt;acc_type,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;account_balance&#39; =&gt; 100,&#39;date_created&#39; =&gt; date(&#39;Y-m-d H:i:s&#39;)],</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;account_name&#39; =&gt; &#39;Bene&#39;, &#39;account_number&#39; =&gt; &#39;98765432&#39;, &#39;account_type&#39; =&gt; $this-&gt;acc_type,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;account_balance&#39; =&gt; 300, &#39;date_created&#39; =&gt; date(&#39;Y-m-d H:i:s&#39;)],</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;account_name&#39; =&gt; &#39;Hemz&#39;, &#39;account_number&#39; =&gt; &#39;5456765&#39;, &#39;account_type&#39; =&gt; $this-&gt;acc_type,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;account_balance&#39; =&gt; 500, &#39;date_created&#39; =&gt; date(&#39;Y-m-d H:i:s&#39;)]</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//return the data as an json array</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>return json_encode($this-&gt;accounts);</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Fetch the relevant data and get the array format result</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function getBalance($account_number): string {</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>foreach($this-&gt;accounts as $val){</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>if($val[&#39;account_number&#39;] == $account_number){</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;balance = $val[&#39;account_balance&#39;];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>if(($this-&gt;balance) &gt; 0){</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>return &#39;Current Balance: &#39;.$this -&gt; balance.&quot;&lt;br /&gt;&quot;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>} else if(($this-&gt;balance) &lt;= 0 ){</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>return &#39;Balance is empty &lt;br /&gt;&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}else{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>return &#39;error&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Deposit of a specific account</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function Deposit($account_number, $amount)</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>echo &#39;Balance after Deposit of the account_number (&#39;.$account_number.&#39;) is : &#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;balance = $this-&gt;balance + $amount;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>echo $this-&gt;balance.&quot;&lt;br /&gt;&quot;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Withdraw of a specific account</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function Withdraw($account_number, $amount)</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>if(($this-&gt;balance) &lt; $amount){</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>echo &#39;Not enough funds to withdraw. &lt;br /&gt;&#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>} else{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;balance = $this-&gt;balance - $amount;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>echo &#39;Balance after Withdrawal of the account_number (&#39;.$account_number.&#39;) is : &#39;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>echo $this-&gt;balance.&quot;&lt;br /&gt;&quot;;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>class <strong>AccountTransaction</strong></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $accNo;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $type;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $duedate;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $amount;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $comment;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $numMoneyAfter;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $allAccTxn = [];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function __construct($accNo, $type, $duedate, $amount, $comment, $numMoneyAfter)</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Initialize the constructor data</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;accNo = $accNo;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;type = $type;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;duedate = $duedate;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;amount = $amount;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;comment = $comment;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;numMoneyAfter = $numMoneyAfter;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>// get all transactions for specific account</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function getAccTxn($accNo)</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;allAccTxn = [</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;accNo&#39; =&gt; $accNo, &#39;type&#39; =&gt; &#39;xxxx&#39;, &#39;numMoneyAfter&#39; =&gt; 75, &#39;comment&#39; =&gt; &#39;comment5&#39;,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;amount&#39; =&gt; 300,&#39;duedate&#39; =&gt; date(&#39;2022-11-08 15:26:25&#39;)],</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;accNo&#39; =&gt; $accNo, &#39;type&#39; =&gt; &#39;xxxx&#39;, &#39;numMoneyAfter&#39; =&gt; 12, &#39;comment&#39; =&gt; &#39;comment1&#39;,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;amount&#39; =&gt; 500,&#39;duedate&#39; =&gt; date(&#39;2022-10-01 15:26:25&#39;)],</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;accNo&#39; =&gt; $accNo, &#39;type&#39; =&gt; &#39;xxxx&#39;, &#39;numMoneyAfter&#39; =&gt; 89, &#39;comment&#39; =&gt; &#39;comment3&#39;,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;amount&#39; =&gt; 700,&#39;duedate&#39; =&gt; date(&#39;2022-11-10 15:26:25&#39;)]</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>return json_encode($this-&gt;allAccTxn);</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>class <strong>TransferDetails </strong>extends <strong>AccountTransaction</strong></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $title;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $sender;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $beneficiary;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>private $allTxn = [];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function __construct($type, $title, $duedate, $amount, $numMoneyAfter, $sender, $beneficiary)</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>//Initialize the constructor data</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;title = $title;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;sender = $sender;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;beneficiary = $beneficiary;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>// get all transactions for all accounts</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>public function getTxnDetails()</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>{</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>$this-&gt;allTxn = [</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;account_type&#39; =&gt; &#39;type1&#39;, &#39;title&#39; =&gt; &#39;test title1&#39;, &#39;duedate&#39; =&gt; date(&#39;2022-08-12&#39;), &#39;amount&#39; =&gt; 200,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;numMoneyAfter&#39; =&gt; 700, &#39;sender&#39; =&gt; &#39;sender1&#39;, &#39;beneficiary&#39; =&gt; &#39;Bob&#39;],</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;account_type&#39; =&gt; &#39;type2&#39;, &#39;title&#39; =&gt; &#39;test title3&#39;, &#39;duedate&#39; =&gt; date(&#39;2022-09-10&#39;), &#39;amount&#39; =&gt; 100,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;numMoneyAfter&#39; =&gt; 900, &#39;sender&#39; =&gt; &#39;sender3&#39;, &#39;beneficiary&#39; =&gt; &#39;John&#39;],</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>[&#39;account_type&#39; =&gt; &#39;type3&#39;, &#39;title&#39; =&gt; &#39;test title2&#39;, &#39;duedate&#39; =&gt; date(&#39;2022-10-02&#39;), &#39;amount&#39; =&gt; 300,</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&#39;numMoneyAfter&#39; =&gt; 800, &#39;sender&#39; =&gt; &#39;sender2&#39;, &#39;beneficiary&#39; =&gt; &#39;Bene&#39;]</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>];</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>return json_encode($this-&gt;allTxn);</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>}</td>
		</tr>
	</tbody>
</table>

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
