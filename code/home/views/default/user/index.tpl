<table border="1" width="800" align="center">
<{foreach $users as $user}>

		<tr>
				<td><{$user.id}></td>	
				<td><{$user.name}></td>	
				<td><{$user.age}></td>	
		</tr>

<{/foreach}>
</table>
