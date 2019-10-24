class TestCase:
    def __init__(self, name):
        # Pluggable Selector パターン
        #  ends(目的): インスタンス毎に異なる振る舞いをさせる
        #  means(手段): リフレクションで動的にメソッドの起動を行う
        self.name = name
    def setUp(self):
        pass
    def tearDown(self):
        pass
    def run(self):
        self.setUp()
        method = getattr(self, self.name) # Pluggable Selector パターン
        method() # Pluggable Selector パターン
        self.tearDown()

# 「テストが走ったかどうかを答えるテスト」のテスト対象クラス
class WasRun(TestCase): # TestCaseクラスを継承
    def setUp(self):
        # Log String (記録用文字列) パターン
        #  ends: 正しい順序でメソッド呼び出しが行われていることをテストする
        #  means: 記録用文字列を作り、メソッド呼び出しのたびにその文字列を追記
        self.log = "setUp "
    def testMethod(self):
        self.log = self.log + "testMethod "
    def tearDown(self):
        self.log = self.log + "tearDown "

class TestCaseTest(TestCase): # TestCaseクラスを継承
    def testTemplateMethod(self):
        test = WasRun("testMethod")
        test.run()
        assert("setUp testMethod tearDown " == test.log) # Log String パターン

TestCaseTest("testTemplateMethod").run()
