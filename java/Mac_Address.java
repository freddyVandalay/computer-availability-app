import java.net.*;
import java.sql.*;
class Mac_Address {
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
		System.out.println("\nUser: " + user + "\nAddress: " + ip);
		// Debug tool
		/*
		 * System.out.println("Network: " + network);
		 */

		// getHardwareAddress returns a byte sequence therefore byte
		byte[] address = network.getHardwareAddress();

		System.out.print("Current MAC address : ");

		// Decodes the MAC address to a string
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
		Connection conn = null;
		try{  
			Class.forName("com.mysql.jdbc.Driver");  
			conn = DriverManager.getConnection("jdbc:mysql://igor.gold.ac.uk:22/rgled002_LibrarySystem","rgled002","FDQ3z<?]N8K<8Zqn");  
			String query = " UPDATE ComputerStatus SET status= 'logged_in' WHERE mac_address= '00:16:3e:86:4a:62' ";
			PreparedStatement preparedStmt = conn.prepareStatement(query);
			//mac_address
			preparedStmt.setString (1, mac);
			//Perform modification
			preparedStmt.executeUpdate();
			conn.close();  
		} catch(Exception e){ 
			System.out.println("\nError: \n" + e);
		} finally {
			
		}



//change status

	}
}