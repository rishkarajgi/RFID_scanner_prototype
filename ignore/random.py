import MySQLdb

txt=open('file.txt')
ufid=txt.read()

roll_number=raw_input("Enter the rollno: ")


connection=MySQLdb.connect(host="127.0.0.1",user="root",passwd="",db="studentinfo")
cursor=connection.cursor()
sql="insert into map values(" +"'"+ str(roll_number)+"'"+ "," + "'"+str(ufid)+"')"
cursor.execute("""INSERT INTO map VALUES (%s,%s)""",(str(roll_number),ufid))
connection.commit()
cursor.close()
connection.close()