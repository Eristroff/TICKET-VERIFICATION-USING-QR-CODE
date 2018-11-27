/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mypack;

import java.sql.*;
public class DBManager {
 public DBManager() throws ClassNotFoundException{
     Class.forName("com.mysql.jdbc.Driver");
 }
 public Connection getCon(){
     try{
         return DriverManager.getConnection("jdbc:mysql://localhost:3306/busticketbooking","root","root");
     }
     catch(Exception e){
         return null;
         
     }
 }
 public boolean executeNonQuery(String sql)
 {
     try{
         PreparedStatement ps=getCon().prepareStatement(sql);
         int n=ps.executeUpdate();
          return (n>0)?true:false;
     }
     catch(Exception e){
         return false;
     }
 }
 public ResultSet getRecord(String sql)
 {
     try{
         PreparedStatement ps=getCon().prepareStatement(sql);
         return ps.executeQuery();
         }
     catch(Exception e)
     {
         return null;
     }
 }
}

