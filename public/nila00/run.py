import nila00
import sys

i = 0
while i==0: #troe
#while True: #trloc
	#print(sys.argv[1])

	#text = input('nilaa > ') #trloc

	f = open(sys.argv[1], "r") #troe
	text = f.read() #troe

	if text.strip() == "": continue
	result, error = nila00.run('<stdin>', text)

	if error:
		print(error.as_string())
	elif result:
		if len(result.elements) == 1:
			print(repr(result.elements[0]))
		else:
			print(repr(result))
	i = 1 #troe
