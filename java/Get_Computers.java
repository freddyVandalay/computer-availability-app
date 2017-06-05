import java.sql.*;  
class Get_Computers{  
	public static void main(String args[]){  
		try{  
			Class.forName("com.mysql.jdbc.Driver");  
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/rgled002_LibrarySystem","rgled002","FDQ3z<?]N8K<8Zqn");  

			Statement stmt=con.createStatement();  
			ResultSet rs=stmt.executeQuery("select * from ComputerStatus");

			while(rs.next()){  
				System.out.println(rs.getInt(1) + "  " + rs.getString(2) + "   " + rs.getString(3));
			}
			con.close();  
		} catch(Exception e){ 
			System.out.println(e);
		}  
	}  
}  
