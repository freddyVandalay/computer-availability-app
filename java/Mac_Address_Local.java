import java.net.*;
import java.sql.*;
class Mac_Address_Local {
	public static void main(String[] args) throws Exception {

		// Java.net classes
		InetAddress ip;
		NetworkInterface network;

		// Retrieve local ip
		ip = InetAddress.getLocalHost();

		// get IP address on the server (igor)
		// hostIp = ip.getHostAddress();

		// System information for debug
		/*
		 * System.out.println("Your host address: " + hostIp +
		 * "      Host name: " + ip.getHostName());
		 * 
		 * System.out.println("InetAddress:   " + InetAddress.getLocalHost());
		 * 
		 * System.out.println();
		 */

		network = NetworkInterface.getByInetAddress(ip);
		String user = System.getProperty("user.name");
		System.out.println("User: " + user + "\nAddress: " + ip);
		// Debug tool
		/*
		 * System.out.println("Network: " + network);
		 */

		// getHardwareAddress returns a byte sequence therefore byte
		byte[] address = network.getHardwareAddress();

		// Decodes the MAC address to a string
		System.out.print("mac_address: ");

		StringBuilder sb = new StringBuilder();
		for (byte b : address) {
			if (sb.length() > 0)
				sb.append(':');
			sb.append(String.format("%02x", b));
		}
		System.out.println(sb.toString());
		String mac = sb.toString();
		//INSERT INTO ComputerMap(status) VALUES("logged_in") 
		//WHERE mac_address = sb.toString()
		//db -- if db has not recieved this then change status to logged_out
		try{  
			Class.forName("com.mysql.jdbc.Driver");  
			Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/LibrarySystem?autoReconnect=true&useSSL=false","root","garsexpel");  
			String query = " UPDATE ComputerStatus SET status= 'logged_in' WHERE mac_address= ? ";
			PreparedStatement preparedStmt = conn.prepareStatement(query);
			//mac_address
			preparedStmt.setString (1, mac);
			//Perform modification
			preparedStmt.executeUpdate();
			conn.close();  
		} catch(Exception e){ 
			e.printStackTrace();
		}  



//change status

	}
}
