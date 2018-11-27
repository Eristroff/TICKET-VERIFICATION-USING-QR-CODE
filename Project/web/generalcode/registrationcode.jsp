<%-- 
    Document   : registrationcode
    Created on : Nov 24, 2018, 10:32:43 PM
    Author     : Dell
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="mypack.DBManager"%>

        <%
            String passwordsignup  =request.getParameter("passwordsignup");
            String passwordsignup_confirm=request.getParameter("passwordsignup_confirm");
            if(passwordsignup.equals(passwordsignup_confirm))
            {
             String usernamesignup=request.getParameter("usernamesignup");
             String emailsignup =request.getParameter("emailsignup");
             
             DBManager db=new DBManager();
             String query1="insert into aaaa values('"+usernamesignup+"','"+emailsignup+"','"+passwordsignup+"','"+passwordsignup_confirm+"')";
             if(db.executeNonQuery(query1)==true)
             {
                 out.println("<script>alert('registration successfull!!');window.location.href='../index.html';</script>");
             }
           else
             {
                 out.println("<script>alert('registration  not successfull!!');window.location.href='../index3.html';</script>");
             }
             
             
             
            }
            
            
            
            
            
            
            %>
     
    </body>
</html>
