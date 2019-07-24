import java.io.*;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;
 
public class DatabaseAccess extends HttpServlet{

   public void doGet(HttpServletRequest request, HttpServletResponse response)
      throws ServletException, IOException {
   
     
      static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
      static final String DB_URL="jdbc:mysql://localhost/pro";

      
      static final String USER = "root";
      static final String PASS = "password";

      
      response.setContentType("text/html");
      PrintWriter out = response.getWriter();
      String title = "Database Result";
      
      String docType =
         "<!doctype html public \"-//w3c//dtd html 4.0 " + "transitional//en\">\n";
      
      out.println(docType +
         "<html>\n" +
         "<head><title>" + title + "</title></head>\n" +
         "<body bgcolor = \"#f0f0f0\">\n" +
         "<h1 align = \"center\">" + title + "</h1>\n");
      try {
         
         Class.forName("com.mysql.jdbc.Driver");
         Connection conn = DriverManager.getConnection(DB_URL, USER, PASS);

         Statement stmt = conn.createStatement();
         String sql;
         sql = "SELECT serno, name FROM pron1";
         ResultSet rs = stmt.executeQuery(sql);

         while(rs.next()){
            int id  = rs.getInt("serno");
            
            String name = rs.getString("name");

            out.println(", serno: " + id + "<br>");
            out.println(", name: " + name + "<br>");
         }
         out.println("</body></html>");

         
         rs.close();
         stmt.close();
         conn.close();
      } catch(SQLException se) {
         se.printStackTrace();
      } catch(Exception e) {
         e.printStackTrace();
      } finally {
         try {
            if(stmt!=null)
               stmt.close();
         } catch(SQLException se2) {
         }
         try {
            if(conn!=null)
            conn.close();
         } catch(SQLException se) {
            se.printStackTrace();
         } 
      } 
   }
} 